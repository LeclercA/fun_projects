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

function findFactor($number) {
    $i = 1;
    $factor = [];
    while ($number / $i >= $i) {
        if (!($number % $i)) {
            $factor[] = $i;
            $factor[] = $number / $i;
        }
        $i++;
    }
    return $factor;
}

print_r (findFactor(600851475143));