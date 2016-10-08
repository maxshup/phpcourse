<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
</head> 
<?php

//Cоздать массив из n чисел, каждый элемент которого равен квадрату своего номера

for ($i = 1; $i <= 10; $i++) 
{
	$arr[$i] = $i * $i;
	var_dump($arr[$i]);
}

?>