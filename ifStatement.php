<?php

// Define some example variables
$age = readline("Please enter your age: ");// readline is use to insert the value of the variable by the terminal 
$isStudent = false;
$hasLicense = true;

// Using logical operators in if statements

// AND operator (&&)
if ($age >= 18 && $hasLicense) {
    echo "You are an adult and you have a driver's license.\n"; // This will be output
}

// OR operator (||)
if ($age < 18 || $isStudent) {
    echo "You are either a minor or a student.\n"; // This will not be output
}

// NOT operator (!)
if (!$isStudent) {
    echo "You are not a student.\n"; // This will be output
}

// Combining logical operators
if ($age >= 18 && (!$isStudent || $hasLicense)) {
    echo "You are an adult and either not a student or you have a driver's license.\n"; // This will be output
}

// More complex condition
if ($age < 30 && $hasLicense || $isStudent) {
    echo "You are either under 30 with a license or a student.\n"; // This will be output
}

?>
