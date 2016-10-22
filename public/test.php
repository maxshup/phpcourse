<?php echo 'test'; ?>
<?php
function sayHelloWorld($count = 1)
{
	$result = '';
	for ($i = 0; $i < $count; $i++) 
	{
		$result .= 'Hello World!<br>';
	}
	return $result;
}
$result = sayHelloWorld(10);
?>
<?php echo 'test'; ?>
<?php require 'view/header.php'; ?>
		<div class="content">
			<?php require 'view/menu.php'; ?>
			<div class="workplace">
				<div><h1>Заголовок</h1></div>
			    <div class="task-item">
			    	Task:<br>
			    	Сказать десять раз HelloWorld!
			    </div>	
	           	<div class="task-item">
	           	    Input:<br>
	           	    ...
	           	</div>    
			    <div class="task-item">
			    	Output:<br>
			    	...
			    </div>	
			    <div class= "task-item">
			    	Code:<br>
			    	...
			    </div>	
			</div>	





		</div>
		<?php require 'view/footer.php'; ?>
	</body>
</html>
