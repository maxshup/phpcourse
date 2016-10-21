<?php

//15. Сделайте форму, которая спрашивает дату в формате '2025-12-31'. С помощью функций mktime и explode переведите эту дату в формат timestamp. Узнайте месяц (словом) за введенную дату.


function AskdataMonth($month)
{
	$askmonth = explode('-', $month);
	$month = [1 => 'January', 'February', 'March', 'April', 'May', 'June', 'Jule', 'August', 'September', 'October', 'November', 'December'];
	echo $month[date('n', mktime(0, 0, 0, $askmonth[1], $askmonth[2], $askmonth[0]))];
	return $month;
}
$result = AskdataMonth('2016-10-21');
$description = 'Сделайте форму, которая спрашивает дату в формате 2025-12-31. С помощью функций mktime и explode переведите эту дату в формат timestamp. Узнайте месяц (словом) за введенную дату.';
$inputData = 'Введите год';