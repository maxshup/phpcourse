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
