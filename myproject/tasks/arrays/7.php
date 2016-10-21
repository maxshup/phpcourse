<?php

//Определите, можно ли вычеркнуть из данного массива одно число так, чтобы оставшиеся числа оказались упорядоченными по возрастанию.

function Array7($result = '')
{
	$arr = [50,10,30,40,20];
	asort($arr);
	$delete = '40';
	$arr = array_flip($arr);
	unset($arr[$delete]);
	$arr = array_flip($arr);
	return $arr;
}
$arr = Array7();
$description = 'Определите, можно ли вычеркнуть из данного массива одно число так, чтобы оставшиеся числа оказались упорядоченными по возрастанию.';
$inputData = 'a = 10, b = 20';;
$result = implode(", ", $arr);
echo $result;