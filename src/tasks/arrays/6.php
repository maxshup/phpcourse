<?php

//Упорядочить значения массива по возрастанию. Реализовать двумя способами: с помощью стандартной функции и без.


function Array6() 
{
	$arr = [20,30,40,10];
	$count = count($arr);
	do {
		$truf = false;
		for ($i = 0; $i < ($count - 1); $i++) {
			if ($arr[$i] > $arr[$i + 1]) {
				list($arr[$i], $arr[$i + 1]) = array($arr[$i + 1], $arr[$i]);
				$truf = true;
			} 
		}
	}while($truf);
	return $arr;
}
$arr = Array6();
$description = 'Упорядочить значения массива по возрастанию. Реализовать двумя способами: с помощью стандартной функции и без.';
$inputData = '20,30,40,10';
$result = implode(' | ', $arr);



// {
// 	$arr = [60,10,30,40,20,50];
// 	asort($arr);
// 	return $arr;
// }
// $arr = Array6(1);
// var_dump($arr);