<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
</head> 
<?php

//Упорядочить значения массива по возрастанию. Реализовать двумя способами: с помощью стандартной функции и без.


function Array6($count = 1, $result = [60,10,30,40,20,50]) 
{
	asort($result);
	foreach ($result as $key => $value) 
	{
		
	}
	return $result;
}
$result = Array6(1);

?>
<?php require 'view/header.php'; ?>
		<div class="content">
			<?php include 'view/menu.php'; ?>
			<div class="workplace">
				<div><h1>Array6</h1></div>
			    <div class="task-item">
			    	Task:<br>
			    	Упорядочить значения массива по возрастанию. Реализовать двумя способами: с помощью стандартной функции и без.
			    </div>	
	           	<div class="task-item">
	           	    Input:<br>
	           	    ...
	           	</div>    
			    <div class="task-item">
			    	Output:<br>
			    	<?php var_dump($result); ?>
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