<?php 
//Найти факториал числа !n.


function Factorial($n) {
	
    $factorial = 1;
    $result = '';
	for ($i = 1; $i <= $n; $i++) 
	{
		$factorial = $factorial * $i;
	}
	return $factorial;
}
$factorial = Factorial(6);
$description = 'Найти факториал числа !n.';
$inputData = '$n';
$result = "Факториал числа равен: ". $factorial;