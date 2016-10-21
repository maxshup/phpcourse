<?php

//Cоздать массив из n чисел, каждый элемент которого равен квадрату своего номера
$i = 1;
function Array2()
{
	for ($i = 1; $i <= 10; $i++)
	{
		$arr[$i] = $i * $i;
	}
	return $arr;
}
$arr[$i] = Array2();
$description = 'Cоздать массив из n чисел, каждый элемент которого равен квадрату своего номера';
$inputData = 'a, b';
$result = implode(", ", $arr[$i]);
echo $result;