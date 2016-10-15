<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
</head> 
<?php

//Вывести 10 раз Hello
function sayHelloWorld($count = 1)
{
	$result = 0;
	for ($i = 0; $i < $count; $i++) 
	{
		$result.= 'Hello World!<br>';
	}
	return $result;
}
$description = '';
$inputData = 'a = 10, b = 20';
$result = sayHelloWorld(10);




?>
<?php require 'view/header.php'; ?>
		<div class="content">
			<?php include 'view/menu.php'; ?>
			<div class="workplace">
				<div><h1>Array 3</h1></div>
			    <div class="task-item">
			    	Task:<br>
			    	Вывести 10 раз слово Hello!
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
