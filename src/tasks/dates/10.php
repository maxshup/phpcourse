<?php

//10. Создайте массив месяцев $month. Выведите на экран название текущего месяца с помощью массива $month и функции date.

function CurrentMonth()
{
	$result = '';
	$month = [1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
	echo $result .= $month[date('n')];
	return $result;
}
$result = CurrentMonth();
$description = '10. Создайте массив месяцев $month. Выведите на экран название текущего месяца с помощью массива $month и функции date.';
$inputData = '';