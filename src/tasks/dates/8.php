<?php

//8. С помощью функций mktime и date выведите 13 февраля 2015 года в формате '31.12.2025'.

function Date8()
{
	$result = '';
	echo $result .= date('d.m.Y', mktime(0, 0, 0, 2, 13, 2015));
	return $result;
}
$result = Date8();
$description = 'С помощью функций mktime и date выведите 13 февраля 2015 года в формате 31.12.2025.';
$inputData = '';