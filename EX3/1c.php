<?php

$x = readline('Insert a number: ');

$y = readline('Insert another number: ');

if ($x > $y) {
    $aux = $x;
    $x = $y;
    $y = $aux;
}

for ($i = $x; $i < $y; $i++) {
    if ($i % 2 == 0) {
        echo 'Pair number: ' . $i . ' ';
    }
}











