<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
</head> 
<?php

//Заполнить массив длины n нулями и единицами, при этом данные значения чередуются, начиная с нуля.

for ($i = 1; $i <= 10; $i++) 
{
	if ($i % 2 == 0) 
	{
		$arr[$i] = 1;
	}
	else 
	{
		$arr[$i] = 0;
	}
	echo "$arr[$i] ";
}

?>