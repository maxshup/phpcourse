<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
</head> 
<?php

//Вывести на экран все шестизначные счастливые билеты. Билет называется счастливым, если сумма первых трех цифр в номере билета равна сумме последних трех цифр. Найдите количество счастливых билетов и процент от общего числа билетов.



function Bileti($count = 1)
{
	global $percent;
	$result = '';
	$ticket = 0;
	for ($n = 0; $n <= 1000000; $n++)
	{
		$s = str_pad($n, 6, 0, STR_PAD_LEFT);
		if ($s[0] + $s[1] + $s[2] == $s[3] + $s[4] + $s[5])
		{
			
			$result++;
		}
	}

	$percent = ($result/999999) * 100;
	/*echo "Всего билетов" . $result . "<br>Счастливых билетов: ".$percent."%";*/
	return $result;
	
	
	
}
$result = Bileti(1);



?>
<?php require 'view/header.php'; ?>
		<div class="content">
			<?php include 'view/menu.php'; ?>
			<div class="workplace">
				<div><h1>Заголовок</h1></div>
			    <div class="task-item">
			    	Task:<br>
			    	Счастливые билеты.
			    </div>	
	           	<div class="task-item">
	           	    Input:<br>
	           	    ...
	           	</div>    
			    <div class="task-item">
			    	Output:<br>
			    	<?php echo "Всего билетов: ".$result. "<br>Счастливых билетов: ".$percent ."%"; ?>
			    </div>	
			    <div class= "task-item">
			    	Code:<br>
			    	...
			    </div>	
			</div>	





		</div>
		<?php include 'view/footer.php'; ?>
	</body>
</html>
   
