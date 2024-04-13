<?php

$WrittenTest = readline('Insert your written test grade: ');
$OralTest = readline('Insert your oral test grade: ');

$finalgrade = ($WrittenTest * 0.7) + ($OralTest * 0.3);

echo ($finalgrade < 9.5) ? 'Failed ' : 'Passed ' ;
echo ' Final grade: ' . $finalgrade;






