<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
</head> 

<?php

//Даны натуральные числа от 35 до 87. Вывести на консоль те из них, которые при делении на 7 дают остаток 1, 2 или 5.


for ($i = 35; $i <= 87; $i++) 
{
	if (($i % 7) >= 1)
		echo $i . ', ';
}

echo "<br>";

for ($i = 35; $i <=87; $i++) 
{
	if (($i % 7) >= 2)
		echo $i . ', ';
}
echo "<br>";

for ($i = 35; $i <=87; $i++) 
{
	if (($i % 7) >= 5)
		echo $i . ', ';
}

?>