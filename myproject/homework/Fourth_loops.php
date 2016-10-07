<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
</head> 

<?php

//Вывести 3 случайных числа от 0 до 100

$min = 0;
$max = 100;

do 
{
	$x = rand($min,$max);
	$y = rand($min,$max);
	$z = rand($min,$max);
	if ($x !== $z && $x !== $y && $z !== $y) 
	{
		echo "$x $y $z";
		break;
		if ($x == $z && $x == $y && $z == $y)  
		{
			$x = rand($min,$max);
	        $y = rand($min,$max);
	        $z = rand($min,$max);
		}
	}
} while (1);


?>