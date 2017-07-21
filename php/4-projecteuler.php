<?php 
$i = 999;
$j = 999;
$number = 0;
while ($i > 99 && $i * $j > $number) {
    while ($j > 99 && $i * $j > $number) {
        if (strrev($i * $j) == $i * $j) {
            $number = $i * $j;
        }
        $j--;
    }
    $i--;
    $j = $i;
}
echo $number;
