<?php

//Удалите в массиве повторы значений. Например, для массива 1 2 4 4 2 5 результатом будет 1 2 4 5.

function Array8()
{
	$arr = [30,21,30,6,89,21,32,7,34,87,6];
	$unique = array_unique($arr);
	return $unique;
	
}
$arr = Array8();
$description = 'Удалите в массиве повторы значений. Например, для массива 1 2 4 4 2 5 результатом будет 1 2 4 5.';
$inputData = '30,21,30,6,89,21,32,7,34,87,6';
$result = implode(' | ', $arr);
