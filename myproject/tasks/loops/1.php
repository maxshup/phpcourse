<?php

//Вывести 10 раз Hello
function sayHelloWorld($count = 1)
{
	$result = '';
	for ($i = 0; $i < $count; $i++) 
	{
		$result.= 'Hello World!<br>';
	}
	return $result;
}
$description = 'Вывести 10 раз Hello';
$inputData = 'a = 10, b = 20';
$result = sayHelloWorld(10);