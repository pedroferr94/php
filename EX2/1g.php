<?php

$salary = readline('What is your salary? ');
$post = readline("What is your post? ");
$newsalary = 0;

switch ($post) {
    case 101:
        echo ' Old salary: ' . $salary . ' New salary: ' . ($newsalary = $salary*1.25) . ' Difference: ' . ($newsalary - $salary);
        break;

    case 102:
        echo ' Old salary: ' . $salary . ' New salary: ' . ($newsalary = $salary*1.20) . ' Difference: ' . ($newsalary - $salary);
        break;

    case 103:
        echo ' Old salary: ' . $salary . ' New salary: ' . ($newsalary = $salary*1.15) . ' Difference: ' . ($newsalary - $salary);
        break;

    default:
        echo ' Old salary: ' . $salary . ' New salary: ' . ($newsalary = $salary*1.10) . ' Difference: ' . ($newsalary - $salary);
        break;
}

