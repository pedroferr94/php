<?php

$NStudents = readline('Input the number of students in the class: ');
$neg = 0;
$grade = 0;

for ($i = 1; $i < $NStudents; $i++) {
    $grade = readline('Please enter the grade of student ' . $i . ' (0 to 20): ');
    if ($grade < 9.5) {
        $neg++;
    }
}
echo 'Number of students: ' . $NStudents . ' ------ ';
echo 'Number of negatives in the class: ' . $neg;
