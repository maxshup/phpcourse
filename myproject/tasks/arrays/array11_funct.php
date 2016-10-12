<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
</head> 
<?php

$arr_new = [];
function Array11()
{
	$arr = [1, -2, 1, 2, -3];
	$arr_new = [];
	for ($i = 0; isset($arr[$i]); $i++)
	{
		array_push($arr_new, $arr[$i]);
		if ($arr[$i] < 0)
		{
			array_push($arr_new, 0);
			
		}
	}return $arr_new;
}
$arr_new = Array11(1);
?>

<?php require 'view/header.php'; ?>
		<div class="content">
			<?php include 'view/menu.php'; ?>
			<div class="workplace">
				<div><h1>Заголовок</h1></div>
			    <div class="task-item">
			    	Task:<br>
			    	Дан массив размера n. После каждого отрицательного элемента массива вставить элемент с нулевым значением.
			    </div>	
	           	<div class="task-item">
	           	    Input:<br>
	           	    ...
	           	</div>    
			    <div class="task-item">
			    	Output:<br>
			    	<?php var_dump($arr_new); ?>
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




