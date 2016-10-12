<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
</head> 
<?php

//Вывести на экран все шестизначные счастливые билеты. Билет называется счастливым, если сумма первых трех цифр в номере билета равна сумме последних трех цифр. Найдите количество счастливых билетов и процент от общего числа билетов.


$ticket = 0;
for ($n = 0; $n <= 1000000; $n++) 
{
	$s = str_pad($n, 6, 0, STR_PAD_LEFT);
	if ($s[0] + $s[1] + $s[2] == $s[3] + $s[4] + $s[5]) 
	{
		echo $s . "<br>";
		$ticket++;
	}
}
$percent = ($ticket/999999) * 100;
echo "Всего билетов: ". $ticket . "<br>Счастливых билетов: ". $percent . "%";
   
?>