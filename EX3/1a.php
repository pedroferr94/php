<?php

$NStudents = readline('Input the number of students in the class: ');
$sum = 0;

for ($i = 1; $i <= $NStudents; $i++) {
    $grade = readline('Insert the grade of student ' . $i . ': ');
    $sum += $grade;
}

echo 'Average score: ' . $sum / $NStudents;

