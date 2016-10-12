<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
</head> 

<?php

//Найти сумму  1+4+7+10+...+112. Ответ: 2147

$result = '';
function SummaChisel($count = 1)
{
	$a = 1;
	$result = '';
	do
	{
		$result = $result + $a;
		$a = $a + 3;
	}
	while ($a <= 112);
	return $result;

}
$result = SummaChisel(1);


?>



<?php
$path = '';
if (!empty($_GET['path'])) 
{
	$path = $_GET['path'];
}
var_dump($path);

$pathChunks = explode('-', $path);
var_dump($pathChunks);


$tasksMap = array(
	"loops" => array(
		"title" => "Loops",
		"tasks" => array(
			1,2,3,4,5,6)
		)

	);
$section = $pathChunks[0];
$task = $pathChunks[1];
require __DIR__ . '/tasks/' . $section . '/' . $task . '.php';
var_dump($tasksMap);
?>
<?php require 'view/header.php'; ?>
		<div class="content">
			<?php include 'view/menu.php'; ?>
			<div class="workplace">
			<?php var_dump($_GET); ?>
				<div><h1>Заголовок</h1></div>
			    <div class="task-item">
			    	Task:<br>
			    	Вывести сумму чисел от 1 до 112.
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


