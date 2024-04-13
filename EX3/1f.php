<?php

$countOdd = 0;
$countEven = 0;
$BiggerEven = 0;
$InsertedNumber = 0;

do{
    $InsertedNumber = readline("Insert Number: ");
    if($InsertedNumber % 2 != 0){
        $countOdd++;
    }git remote add origin https://github.com/pedroferr94/php.git
git branch -M main
git push -u origin main

    elseif($InsertedNumber % 2 == 0 && $InsertedNumber > $BiggerEven){
        $BiggerEven = $InsertedNumber;
        $countEven++;
    }

    } while($countOdd < 5);

if($countEven == 0){
    echo 'You didn\'t entered any even numbers';
}
else{
    echo 'You already entered 5 odd numbers and the biggest even number is: ' . $BiggerEven;
}






