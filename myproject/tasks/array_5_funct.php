<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
</head> 
<?php

//Поменять местами наибольший и наименьший элементы массива.

function Array5($count = 1, $result = [60,40])
{
     
    if ($result[0] < $result[1]) 
    { 
        $result = [ 0 => $result[1], 1 => $result[0]]; 
    } 
    else
    
    {
    	$result = [ 0 => $result[1], 1 => $result[0]]; 
    }
    return $result;


}
$result = Array5(1);


?>
<?php require 'view/header.php'; ?>
		<div class="content">
			<?php include 'view/menu.php'; ?>
			<div class="workplace">
				<div><h1>Array 5</h1></div>
			    <div class="task-item">
			    	Task:<br>
			    	Поменять местами наибольший и наименьший элементы массива.
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
