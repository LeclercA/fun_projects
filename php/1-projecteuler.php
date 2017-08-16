<?php

function MultiplesOfThreeAndFive($number = 1000) {
    $sum = 0;
    for ($i = 0; $i < $number; $i++) {
        if (!($i % 3) || !($i % 5)) {
            $sum += $i;
        }
    }
    return $sum;
}

echo MultiplesOfThreeAndFive();

# On one line
# array_sum(array_filter(range(0,999),function ($val){return $val % 3 === 0 || $val % 5 === 0;}));
