<?php
ini_set('memory_limit', -1);
function isPrime($number) {
    $i = 2;
    $notFound = true;
    while ($i < $number && $notFound) {
        if ($number % $i) {
            $i++;
        } else {
            $notFound = false;
        }
    }
    return $notFound;
}
set_time_limit(600);
$sum = 0;
for($i = 1;$i < 100000;$i++){
    if(isPrime($i)){
        $sum += $i;
    }
}

echo $sum;