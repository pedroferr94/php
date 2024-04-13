<?php

$UserAge = readline('How old are you?');

do {
    $MaritalStatus = readline('Marital status (Single = 1 Married = 2: ');
} while ($MaritalStatus !== '1' && $MaritalStatus !== '2');

if ($MaritalStatus === '1' && $UserAge < 25) {
    $group = 1;
}

else if ($MaritalStatus === '1' && $UserAge >= 25) {
    $group = 2;
}

else if ($MaritalStatus === '2' && $UserAge < 34) {
    $group = 3;
}

else if ($MaritalStatus === '2' && $UserAge >= 34) {
    $group = 4;
}

switch ($group)
{
    case 1:
        echo 'You are in Group 1';
        break;
    case 2 :
        echo 'You are in Group 2';
        break;
    case 3 :
        echo 'You are in Group 3';
        break;
    case 4 :
        echo 'You are in Group 4';
        break;
    default:
        echo 'You are not in any group';
        break;
}


