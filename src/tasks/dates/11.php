<?php

//11. Найдите номер текущего дня от начала месяца.

function NumberOfDay()
{
	$result = '';
	echo $result .= date('d');
	return $result;
}	
$result = NumberOfDay();
$description = '11. Найдите номер текущего дня от начала месяца.';
$inputData = '';

