<?php

//14. Сделайте форму, которая спрашивает дату в формате '31.12.2025'. С помощью функций mktime иexplode переведите эту дату в формат timestamp. Узнайте день недели (словом) за введенную дату.

function AskdataWeek($date)
{
	$askdate = explode('.', $date);
	$week = ['Sunday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Monday'];
	echo $week[date('w', mktime(0, 0, 0, $askdate[1], $askdate[0], $askdate[2]))];
	return $week;
}
$result = AskdataWeek('3.02.1993');
$description = 'Сделайте форму, которая спрашивает дату в формате 31.12.2025. С помощью функций mktime иexplode переведите эту дату в формат timestamp. Узнайте день недели (словом) за введенную дату.';
$inputData = 'Введите год';