<?php

// Define some example variables
$age = readline("Please enter your age: ");// readline is use to insert the value of the variable by the terminal 
$isStudent = false;
$hasLicense = true;
$isEmployed = true;

// Using logical operators with if...elseif...else

if ($age >= 18 && $hasLicense && $isEmployed) {
    echo "You are an adult, have a driver's license, and are employed.\n";
} elseif ($age >= 18 && ($isStudent || !$isEmployed)) {
    echo "You are an adult, but you are either a student or unemployed.\n";
} elseif ($age < 18 || !$hasLicense) {
    echo "You are either a minor or do not have a driver's license.\n";
} else {
    echo "You do not meet any of the conditions.\n";
}

?>
