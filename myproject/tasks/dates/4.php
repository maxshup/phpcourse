<?php

//2. Выведите 1 марта 2025 года в формате timestamp

// $a = mktime(13, 12, 59, 3, 15, 2000);
// $b = time();
// $time = $b - $a;
// echo $time;

echo time() - mktime(13, 12, 59, 3, 15, 2000);