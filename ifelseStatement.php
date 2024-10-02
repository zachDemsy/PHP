<?php

// Define example variables
$age = readline("Please enter your age: ");// readline is use to insert the value of the variable by the terminal   
$isStudent = false;
$hasLicense = true;

// Using if...else with logical operators

if ($age >= 18 && $hasLicense) {
    echo "You are an adult and you have a driver's license.\n"; // This will be output
} elseif ($age >= 18 && !$isStudent) {
    echo "You are an adult but not a student.\n"; // This will not be output
} elseif ($age < 18 || $isStudent) {
    echo "You are either a minor or a student.\n"; // This will not be output
} else {
    echo "You are not an adult and not a student.\n"; // This will not be output
}

?>
