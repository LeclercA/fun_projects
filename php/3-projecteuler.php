<?php
include "utilities.php";

function findFactor($number) {
    $i = 1;
    $factor = [];
    $half = $number / 2;
    while ($i < $half && !in_array($i, $factor)) {
        if (!($number % $i)) {
            $factor[] = $i;
            $factor[] = $number / $i;
        }
        $i++;
    }
    return $factor;
}

$var = findFactor(600851475143);
rsort($var);
print_r($var);
$i = 0;
$count = count($var);
$notFound = TRUE;
while ($i < $count && $notFound) {
    if (isPrime($var[$i])) {
        $number = $var[$i];
        $notFound = FALSE;
    }
    $i++;
}
echo $number;
