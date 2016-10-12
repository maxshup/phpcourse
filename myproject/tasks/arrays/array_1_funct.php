<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
</head> 
<?php

//Заполнить массив длины n нулями и единицами, при этом данные значения чередуются, начиная с нуля.
$i = 0;
function Massiv01($count = 1)
{
	
	for ($i = 1; $i <= 10; $i++)
	{
		if ($i % 2 == 0)
		{
			$result[$i] = 1;
		}
		else
		{
			$result[$i] = 0;
		}
		
		
		
	}	
	return $result;
}

$result[$i] = Massiv01(1);


?>
<?php require 'view/header.php'; ?>
		<div class="content">
			<?php require 'view/menu.php'; ?>
			<div class="workplace">
				<div><h1>Array 1</h1></div>
			    <div class="task-item">
			    	Task:<br>
			    	Заполнить массив 0 и 1.
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

