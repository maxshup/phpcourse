<?php

//9. Создайте массив дней недели $week. Выведите на экран название текущего дня недели с помощью массива $week и функции date. Узнайте какой день недели был 06.06.2006, в ваш день рождения.

function CurrentDay()
{
	$result = '';
	$week = ['Sunday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Monday'];
	echo $result .= $week[date('w', mktime(0, 0, 0, 6, 5, 2006))];
	return $result;
}
$result = CurrentDay();	
$descriprion = 'Создайте массив дней недели $week. Выведите на экран название текущего дня недели с помощью массива $week и функции date. Узнайте какой день недели был 06.06.2006, в ваш день рождения.';
$inputData = '';