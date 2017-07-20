<?php
$sumOfSquares = 0;
$squareOfSums = 0;
for($i =0;$i<= 100;$i++){
    $sumOfSquares += pow($i,2);
    $squareOfSums += $i;
}
echo pow($squareOfSums,2) - $sumOfSquares;