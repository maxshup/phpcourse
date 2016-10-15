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