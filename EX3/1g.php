<?php

$sequence = '';
$invertedSequence = '';

$insertedNum = readline('Please insert a number: ');

for ($i = 1; $i <= $insertedNum; $i++) {
    $sequence .= $i;
    $invertedSequence = $i . $invertedSequence;
}

echo $sequence . $invertedSequence;





