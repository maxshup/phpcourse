<?php

//Поменять местами наибольший и наименьший элементы массива.

function Array5($arr = [15,40])
{
     
    if ($arr[0] < $arr[1]) { 
        $arr = [ 0 => $arr[1], 1 => $arr[0]]; 
    } else {
    	$arr = [ 0 => $arr[1], 1 => $arr[0]]; 
      }
    return $arr;
}
$arr = Array5();
$description = 'Поменять местами наибольший и наименьший элементы массива.';
$inputData = 'Дан массив [15,40]';
$result = implode(" | ", $arr);

