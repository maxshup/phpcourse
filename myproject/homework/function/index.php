<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
</head> 
<?php

for ($i = 1; $i <= 10000; $i++) 
{
	if (strpos((integer)$i, '3') !== false) 
	{
		if ($i % 5 >= 1) 
		{
			echo $i. ', ';
		}
	}
}


?>