<?php

//Дан массив размера n. После каждого отрицательного элемента массива вставить элемент с нулевым значением.


function Array11($arr_new = [])
{
	$arr = [1, -2, 1, 2, -3];
	$count = count($arr);
	$arr_new = [];
	for ($i = 0; $i < $count; $i++)
	{
		array_push($arr_new, $arr[$i]);
		if ($arr[$i] < 0)
		{
			array_push($arr_new, 0);
			
		}
	}return $arr_new;
}
$arr_new = Array11(1);
$description = 'Дан массив размера n. После каждого отрицательного элемента массива вставить элемент с нулевым значением.';
$inputData = 'Дан массив: [1, -2, 1, 2, -3]';
$result = implode(' | ', $arr_new);
