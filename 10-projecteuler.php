<?php
function isPrime($number) {
    $i = 2;
    $notFound = true;
    while ($i < $number && $notFound && $number / $i >= $i) {
        if ($number % $i) {
            $i++;
        } else {
            $notFound = false;
        }
    }
    return $notFound;
}

$sum = 0;
for($i = 2;$i < 2000000;$i++){
    if(isPrime($i)){
        $sum += $i;
    }
}
echo $sum;
//takes 15-16 seconds to execute
