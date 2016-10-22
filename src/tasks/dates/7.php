<?php

//7. Выведите текущую дату-время в форматах '2025-12-31', '31.12.2025', '31.12.13', '12:59:59'.

function Date7()
{
	$result = '';
	$result .= date('Y.m.d')."<br>";
	$result .= date('d.m.Y')."<br>";
	$result .= date('d.m.y')."<br>";
	$result .= date('H:i:s');
}
$result = Date7();
$description = 'Выведите текущую дату-время в форматах 2025-12-31, 31.12.2025, 31.12.13, 12:59:59.';
$inputData = '';