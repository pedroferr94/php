<?php

$nStudents = readline('Please insert the number of students: ');
$knowingAge = readline('Please insert the age that you want to know: ');
$AgeOfStudent = 0;
$count = 0;

for ($i = 0; $i < $nStudents; $i++) {
    $AgeOfStudent = readline('Please insert the age of the student ' . ($i+1) .': ');
    if ($AgeOfStudent >= $knowingAge ) {
        $count++;
    }
}

$percentage = ($count / $nStudents) * 100;

echo 'In this class you have ' . $percentage . '% of students with ' . $knowingAge . ' years old.';


