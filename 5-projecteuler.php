<?php
$start = 0;
$notFound = true;
$multiple = 0;

while ($notFound) {
    $multiple = 1;
    $start++;
    while(!($start % $multiple)){
        $multiple++;
    }
    if($multiple >= 20){
        $notFound = false;
    }
}

echo $start;