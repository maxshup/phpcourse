<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
</head> 

<?php

//Найти сумму  1+4+7+10+...+112. Ответ: 2147

$a = 1;
$summa = 0;

do 
{
	$summa = $summa +$a;
	$a = $a + 3;
}
while ($a <= 112);
echo "$summa ";   
    
?> 