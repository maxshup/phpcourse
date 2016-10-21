<?php

function funct3($percent)
{
	$arr = [5, 6.5, 10, 3.355, 400, 9.43, 3, 7];
	$count = count($arr);
	if ($percent > 0) {
		if ($percent >= 2.5) {
			$percent = $percent - 1;
		}
		for ($i = 0; $i < $count; $i++) {
			$arr[$i] = $percent * $arr[$i];
		} 
	} else {
		echo "ERROR";
	} 
	return $arr;
}
$arr = funct3(2.5);
$description = 'Разработать функцию, которая вносит процентную коррекцию в массив чисел(целых, дробных или смешанных не имеет значения.';
$inputData = 'Исходный массив [5, 6.5, 10, 3.355, 400, 9.43, 3, 7]';
$result = implode($arr, ' | ');
// echo $result;
