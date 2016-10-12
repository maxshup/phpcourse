<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
</head> 

<?php

//Вывести 3 случайных числа от 0 до 100

function RandomNumbers($count = 1)
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

?>

<?php require 'view/header.php'; ?>
		<div class="content">
			<?php include 'view/menu.php'; ?>
			<div class="workplace">
				<div><h1>Заголовок</h1></div>
			    <div class="task-item">
			    	Task:<br>
			    	Рандомные числа от 0 до 100.
			    </div>	
	           	<div class="task-item">
	           	    Input:<br>
	           	    ...
	           	</div>    
			    <div class="task-item">
			    	Output:<br>
			    	<?php echo $result; ?>
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



?>