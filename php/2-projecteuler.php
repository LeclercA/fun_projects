<?php
function EvenFibonacciNumbers() {
    $sum = 0;
    $add = 0;
    $fibonacci = 1;
    while ($fibonacci < 4000000) {
        if (!($fibonacci % 2)) {
            $sum += $fibonacci;
        }
        $temp = $fibonacci + $add;
        $add = $fibonacci;
        $fibonacci = $temp;
    }
    return $sum;
}

echo EvenFibonacciNumbers();
