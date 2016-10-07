<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
</head> 
<?php

$arr1 = [1,2,3,4,5];
$arr2 = [6,7,8,9,10];

$arr3 = array_merge($arr1, $arr2);
asort($arr3);
var_dump($arr3);
?>