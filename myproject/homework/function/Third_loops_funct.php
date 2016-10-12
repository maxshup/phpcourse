<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
</head> 

<?php

//Вывести все числа, меньшие 10000, у которых есть хотя бы одна цифра 3 и которые не делятся на 5.

function ChuclaMense10000($count = 1)
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
			    	<?php echo "Количество чисел меньше 10000 и делящихся на 5 = ". $result; ?>
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