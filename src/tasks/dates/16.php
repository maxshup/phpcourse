<?php

//16. Сделайте форму, которая спрашивает у пользователя дату в формате '2025-12-31T12:59:59'. С помощью функций mktime и explode переведите эту дату в формат timestamp. Узнайте месяц (словом) за введенную дату. Подсказка: explode следует применить трижды.


function AskdataTimeDate($timeDate)
{
	$array = explode('T', $timeDate);
	$date = explode('-', $array[0]);
	$time = explode(':', $array[1]);
	$month = [1 => 'January', 'February', 'March', 'April', 'May', 'June', 'Jule', 'August', 'September', 'October', 'November', 'December'];
	echo $month[date('n', mktime($time[0], $time[1], $time[2], $date[1], $date[2], $date[0]))];
	return $month;
}
$result = AskdataTimeDate('1996-08-1T12:59:59');
$description = 'Сделайте форму, которая спрашивает у пользователя дату в формате 2025-12-31T12:59:59. С помощью функций mktime и explode переведите эту дату в формат timestamp. Узнайте месяц (словом) за введенную дату. Подсказка: explode следует применить трижды.';
$inputData = 'Введите год';