<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
</head> 

<?php

//Даны натуральные числа от 35 до 87. Вывести на консоль те из них, которые при делении на 7 дают остаток 1, 2 или 5.


function NaturalNumbers3587($count = 1)
{
	$result = '';
	for ($i = 35; $i <= 87;$i++)
	{
		if (($i % 7) >= 1)
			echo "$i" . ', ';

	}

	echo "<br>";

	for ($i = 35; $i <= 87; $i++)
	{
		if (($i % 7) >= 2)
			echo $i . ', ';
	}   
	echo "<br>";

	for ($i = 35; $i <= 87; $i++)
	{
		if (($i % 7) >= 5)
			echo $i . ', ';
	} 
     
	return $result;
}
$result = NaturalNumbers3587(1);

?>


<?php require 'view/header.php'; ?>
		<div class="content">
			<?php include 'view/menu.php'; ?>
			<div class="workplace">
				<div><h1>Заголовок</h1></div>
			    <div class="task-item">
			    	Task:<br>
			    	Вывести сумму чисел от 1 до 112.
			    </div>	
	           	<div class="task-item">
	           	    Input:<br>
	           	    ...
	           	</div>    
			    <div class="task-item">
			    	Output:<br>
			    	<?php echo $result . ', '; ?>
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