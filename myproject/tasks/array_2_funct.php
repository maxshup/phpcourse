<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
</head> 
<?php

//Cоздать массив из n чисел, каждый элемент которого равен квадрату своего номера
$i = 1;
function Array2($count = 1, $result = '')
{
	for ($i = 1; $i <= 10; $i++)
	{
		$result[$i] = $i * $i;
	}
	return $result;
}
$result[$i] = Array2(1);



?>
<?php require 'view/header.php'; ?>
		<div class="content">
			<?php include 'view/menu.php'; ?>
			<div class="workplace">
				<div><h1>Array 2</h1></div>
			    <div class="task-item">
			    	Task:<br>
			    	Cоздать массив из n чисел, каждый элемент которого равен квадрату своего номера.
			    </div>	
	           	<div class="task-item">
	           	    Input:<br>
	           	    ...
	           	</div>    
			    <div class="task-item">
			    	Output:<br>
			    	<?php var_dump($result[$i]); ?>
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


