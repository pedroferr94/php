<?php

do {
    $workedhours = readline('Please input worked hours:');
} while ($workedhours < 36);

$extraHours = $workedhours - 36;

if ($workedhours == 36) {
    echo 'Your week salary: ' . $workedhours * 7.5;;
}

elseif ($workedhours > 36) {
    echo 'Your week salary: ' . (($workedhours * 7.5) + ($extraHours*10));
}













