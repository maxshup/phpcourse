<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
</head> 
<?php

//Упорядочить значения массива по возрастанию. Реализовать двумя способами: с помощью стандартной функции и без.

$a = [60,10,30,40,20,50];
$i = 0;
asort($a);
foreach ($a as $key => $value) 
{
	echo "$key = $value <br>";
}

?>