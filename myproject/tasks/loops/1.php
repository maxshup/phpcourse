<?php

//Вывести 10 раз Hello
function sayHelloWorld($count = 1)
{
	$result = '';
	for ($i = 0; $i < $count; $i++) 
	{
		$result.= 'Hello World!<br>';
	}
	return $result;
}
$description = 'Вывести 10 раз Hello';
$inputData = 'a = 10, b = 20';
<<<<<<< HEAD
$result = sayHelloWorld(10);
=======
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


>>>>>>> 7b509408f518b3cf448ba8dafe5c6e37233b50b1
