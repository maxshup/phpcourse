<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
</head> 
<?php

//Найдите сумму и произведение элементов массива.Реализовать двумя способами: с помощью стандартных функций и без.
$arr = [1,3,12,28,23,7];
function Array3($count = 1, $b = 0, $arr = [1,3,12,28,23,7], $result = '')
{
	global $c;
	$c = 1;

    for ($i = 0; $i < 6; $i++)
    {
    	$result = $result + $arr[$i];
    	$c = $c * $arr[$i];
    }
    return $result;
    echo "Сумма без функции = ". $b, "<br>";
    echo "Произведение без функции = ". $c, "<br>";

}
$result = Array3(1);


?>
<?php require 'view/header.php'; ?>
		<div class="content">
			<?php include 'view/menu.php'; ?>
			<div class="workplace">
				<div><h1>Array 3</h1></div>
			    <div class="task-item">
			    	Task:<br>
			    	Найдите сумму и произведение элементов массива.
			    </div>	
	           	<div class="task-item">
	           	    Input:<br>
	           	    ...
	           	</div>    
			    <div class="task-item">
			    	Output:<br>
			    	<?php echo "Сумма без функции = ". $result."<br>"."Произведение без функции = ".$c. "<br>";
			    	echo "Сумма с функцией = ".array_sum($arr)."<br>Произведениебез функции = ".array_product($arr); ?>
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

