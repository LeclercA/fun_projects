<?php
function isPrime($number) {
    $i = 2;
    $notFound = TRUE;
    while ($i < $number && $notFound) {
        if ($number % $i) {
            $i++;
        } else {
            return FALSE;
        }
    }
    return TRUE;
}

function checkForNPrime($primeNumber) {
    $i = 0;
    $numberOfPrime = -1; //remove 1
    $lastPrime = 0;
    while($numberOfPrime <= $primeNumber) {
        if(isPrime($i)){
            $lastPrime = $i;
            $numberOfPrime++;
        }
        $i++;
    }
    return $lastPrime;
}

echo checkForNPrime(10001);
