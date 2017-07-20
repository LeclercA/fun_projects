<?php
$a = 1;
$b = 1;
$c = 1;
$notFound = true;

while ($notFound) {
    while ($c > $b && $notFound) {
        while ($b > $a && $notFound) {
            if ( ($a + $b + $c) === 1000 && pow($a, 2) + pow($b, 2) === pow($c, 2)) {
                $notFound = false;
                $product = $a * $b * $c;
            }
            $a++;
        }
        $a = 1;
        $b++;
    }
    $a = 1;
    $b = 1;
    $c++;
}

echo $product;