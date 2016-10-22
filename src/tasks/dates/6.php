<?php

//6. Выведите на экран текущий год, день, месяц, час, минуту, секунду.

function Date6()
{
	$result = '';
	echo $result .= date('Y.d.m | H:i:s');
	return $result;
}
$result = Date6();
$description = 'Выведите на экран текущий год, день, месяц, час, минуту, секунду.';
$inputData = '';
