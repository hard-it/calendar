<div class="year">
	<h1 class="calendar_title">Календарь за 2022 год</h1>
    <?
    $months = array(
        "Январь",
        "Февраль",
        "Март",
        "Апрель",
        "Май",
        "Июнь",
        "Июль",
        "Август",
        "Сентябрь",
        "Октябрь",
        "Ноябрь",
        "Декабрь"
    );
    for ($i = 1; $i <= count($months); $i++) {
        $countDay = cal_days_in_month(CAL_GREGORIAN, $i, 2022);
        echo "<div class='month'><div class='month-title'>" . $months[$i - 1] . "</div>";
        for ($j = 1; $j <= $countDay; $j++) { ?>
			<span class='day<? if ($i == 2 && $j == 4) {
                echo " birthDay";
            } ?>'><?= $j ?></span>
        <? }
        echo "</div>";
    }
    ?>
</div>

<style>
	body {
		font-family: sans-serif;
	}

	.year {
		width: 1160px;
		margin: 0 auto;
		display: flex;
		flex-wrap: wrap;
		align-items: baseline;
	}

	.calendar_title {
		width: 100%;
		text-align: center;
		background: red;
		margin: 20px 0;
		color: #fff;
		padding: 5px
	}

	.month-title {
		display: flex;
		align-items: center;
		width: 100%;
		height: 24px;
		justify-content: center;
		padding: 5px;
		background: aqua;
		outline: 1px solid #000
	}

	.month {
		display: flex;
		flex-wrap: wrap;
		width: 280px;
		margin: 10px 5px;
	}

	.birthDay {
		font-weight: bold;
		background: red;
		color: #fff;
	}

	.day {
		display: flex;
		align-items: center;
		justify-content: center;
		width: 40px;
		height: 40px;
		outline: 1px solid #000
	}

	.day:nth-child(7n), .day:nth-child(7n+1) {
		color: red
	}
</style>
