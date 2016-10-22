<?php 


function speed($s, $t) 
{ 

$kmh = $s / $t; 
$ms = ($kmh / 3.6);
$result = "Скорость в км/ч = " . $kmh . "<br>" . "Скорость в м/c = " . $ms; 

return $result; 
} 

$result = speed(100,12); 
$description = 'Рассчитать скорость движения машины и вывести её в удобочитаемом виде. Осуществить возможность вывода в км/ч, м/c.';
$inputData = 'S - Путь, t - Время.';