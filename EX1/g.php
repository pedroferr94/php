<?php

$payedValue = readline('Insert the value that client needs to pay: ');
do{
$receivedValue = readline('Insert the value that client gave to you: ');

    if ($receivedValue < $payedValue) {
        echo "The recieved value is less than what the client need to pay!!! ";
    } else {
        $change = $receivedValue - $payedValue;
        $tip = 0.1 * $change;
        $effectiveChange = $change + $tip;

        echo 'The final change with a 10% tip is ' . $effectiveChange;

    }
} while ($receivedValue < $payedValue);








