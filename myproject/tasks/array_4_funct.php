<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
</head> 
<?php

// Определите, есть ли в массиве повторяющиеся элементы.
function Array4()
{
	
	$arr = [1,10,23,28,10]; 
    $count = count($arr); 
    $i = 0;

    foreach (array_unique($arr) as $value) 
    {
    	$value = $i++;
    }
    if (count($arr) == $i)
    {
    	
    }
    else 
    {
    	($count - $i);
    	$b = ($count - $i);
    }return $b;
}
$b = Array4(1);





?>

<?php require 'view/header.php'; ?>
		<div class="content">
			<?php include 'view/menu.php'; ?>
			<div class="workplace">
				<div class="zagolovok"><h1>Array 4</h1></div>
			    <div class="task-item">
			    	Task:<br>
			    	Определите, есть ли в массиве повторяющиеся элементы.
			    </div>	
	           	<div class="task-item">
	           	    Input:<br>
	           	    ...
	           	</div>    
			    <div class="task-item">
			    	Output:<br>
			    	<?php echo "Повторяющихся значений: ".$b;?>
			    </div>
			    <div class= "task-item">
			    	Code:<br>
			    	...
			    </div>	
			</div>	





		</div>
		<?php include 'view/footer.php'; ?>
