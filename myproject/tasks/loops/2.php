<?php
//Найти сумму  1+4+7+10+...+112. Ответ: 2147

$result = '';
function SummaChisel()
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
$description = 'Найти сумму чисел 1+4+7+10+...+112';
$inputData = 'a = 10, b = 20';
$result = SummaChisel(1);

?>

