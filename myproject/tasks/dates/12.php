<?php

//12. Найдите количество дней в текущем месяце. Скрипт должен работать независимо от месяца, в котором он запущен. Показать решение.

function DaysMonth()
{
	$result = '';
	echo $result .= "Days in month: ". date('t');
	return $result;
}
$result = DaysMonth();
$description = 'Найдите количество дней в текущем месяце. Скрипт должен работать независимо от месяца, в котором он запущен. Показать решение.';
$inputData = '';