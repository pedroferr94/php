<?php

$opt = 0;

$averageBalance = readline('Insert your average balance: ');


if ($averageBalance >= 201 && $averageBalance <= 400) {
    $opt = 1;
}

else if ($averageBalance >= 401 && $averageBalance <= 600) {
    $opt = 2;
}

else if ($averageBalance >= 601) {
    $opt = 3;
}

switch ($opt){
    case 1:
        echo 'You have a ' . ($averageBalance * 0.2) .  ' credit. ';
        break;
    case 2:
        echo 'You have a ' . ($averageBalance * 0.3) . ' credit. ';
        break;
    case 3:
        echo 'You have a ' . ($averageBalance * 0.4) .  ' credit. ';
        break;
    default:
        echo 'You don\'t have credit';
}





