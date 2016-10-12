<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
</head> 

<?php

//Вывести все числа, меньшие 10000, у которых есть хотя бы одна цифра 3 и которые не делятся на 5.

for ($i = 0; $i <= 10000; $i++) 
{
	if (strpos((integer)$i, "3") !== false) 
	{
		if (($i % 5) >= 1) 
		{
			echo $i . ', ';
		}
	}
}

?>