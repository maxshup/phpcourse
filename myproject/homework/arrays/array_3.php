<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
</head> 
<?php

//Найдите сумму и произведение элементов массива.Реализовать двумя способами: с помощью стандартных функций и без.

$b = 0;
$c = 1;
$a = [1,3,12,28,23,7];

array_sum($a);
echo "Сумма с функцией = " . array_sum($a), "<br>";
array_product($a);
echo "произведение с функцией = " . array_product($a), "<br>";

for ($i = 0; $i < 6; $i++) 
{
	$b = $b + $a[$i];
	$c = $c * $a[$i];
}
echo "Сумма без функции = ". $b, "<br>";
echo "Произведение без функции = ". $c, "<br>";

?>