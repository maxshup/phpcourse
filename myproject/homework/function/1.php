<?php

function sayHelloWorld($count = 1)
{
	for ($i = 0; $i < $count; $i++) 
	{
		$result.= 'Hello World!<br>';
	}
	return $result;
}
$result = sayHelloWorld(10);
?>
<?php echo 'test'; ?>
<?php require 'view/header.php'; ?>
		<div class="content">
			<?php include 'view/menu.php'; ?>
			<div class="workplace">
				<div><h1>Заголовок</h1></div>
			    <div class="task-item">
			    	Task:<br>
			    	Вывести 10 раз HelloWorld!
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
