<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
</head> 
<?php

//Определите, можно ли вычеркнуть из данного массива одно число так, чтобы оставшиеся числа оказались упорядоченными по возрастанию.

function Array7($count =1)
{
	$arr = [50,10,30,40,20];
	asort($arr);
	foreach ($arr as $key => $value) 
	{
		
	}
	$delete = '40';
	$arr = array_flip($arr);
	unset($arr[$delete]);
	$arr = array_flip($arr);
	return $arr;
}
$arr = Array7(1);



?>
<?php require 'view/header.php'; ?>
		<div class="content">
			<?php include 'view/menu.php'; ?>
			<div class="workplace">
				<div><h1>Array 7</h1></div>
			    <div class="task-item">
			    	Task:<br>
			    	Определите, можно ли вычеркнуть из данного массива одно число так, чтобы оставшиеся числа оказались упорядоченными по возрастанию.
			    </div>	
	           	<div class="task-item">
	           	    Input:<br>
	           	    ...
	           	</div>    
			    <div class="task-item">
			    	Output:<br>
			    	<?php var_dump($arr); ?>
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