<?php

// Определите, есть ли в массиве повторяющиеся элементы.
function Array4()
{
	$res ='';
	$arr = [1,10,23,28]; 
    $count = count($arr); 
    $i = 0;

    foreach (array_unique($arr) as $value) {
    	$value = $i++;
    }
    if (count($arr) == $i){
    	$res .= " 0.";
    }
    else 
    {
    	$res = ($count - $i);
    }
    return $res;
}
$res = Array4();
$description = ' Определите, есть ли в массиве повторяющиеся элементы.';
$inputData = 'Дан массив.';
$result = "Повторений: ". $res;
