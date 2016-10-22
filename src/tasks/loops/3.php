<?php

//Вывести все числа, меньшие 10000, у которых есть хотя бы одна цифра 3 и которые не делятся на 5.

function ChuclaMense10000()
{
	
	$result = '';
	for ($i = 0; $i <= 10000; $i++)
	{
		if (strpos((integer)$i, "3") !== false)
		{
			if (($i % 5) >= 1)
			{
				$result++;
			}
		}
	}
	return $result;
}
$result = ChuclaMense10000(1);
$description = 'Вывести все числа, меньшие 10000, у которых есть хотя бы одна цифра 3 и которые не делятся на 5';
$inputData = 'a = 10, b = 20';
?>