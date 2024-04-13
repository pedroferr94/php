<?php

$n = 0;
$sum = 0;
$count = 0;

do{
    $n = readline('Insert a number: ');
    $sum += $n;
    $count++;

} while($n != 0);

echo 'Average' . $sum / $count;
