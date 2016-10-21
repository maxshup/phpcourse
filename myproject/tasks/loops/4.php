<?php

//Вывести 3 случайных числа от 0 до 100

function RandomNumbers()
{
	$min = 0;
	$max = 100;
	$result = '';
	do
	{
		$x = rand($min,$max);
		$y = rand($min,$max);
		$z = rand($min,$max);
		if ($x !== $z && $x !== $y && $z !== $y)
		{
			$result = "$x $y $z";
			break;
			if ($x == $z && $x == $y && $z == $y)
			{
				$x = rand($min,$max);
	            $y = rand($min,$max);
	            $z = rand($min,$max);
			}
		}
	}while (1);
	return $result;
	
}
$result = RandomNumbers(1);
$description = 'Вывести 3 случайных числа от 0 до 100';
$inputData = 'a =10, b= 20';
?>
