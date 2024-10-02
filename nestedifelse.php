<?php

// Take user input for age and employment status
$age = readline("Please enter your age: ");
$isEmployed = readline("Are you employed? (yes/no): ");

// Check if the age is numeric
if (is_numeric($age)) {
    $age = (int)$age;

    // Nested if...else
    if ($age >= 18) {
        // First condition: age is 18 or older (adult)
        if ($isEmployed == "yes") {
            echo "You are an employed adult.\n";
        } else {
            echo "You are an unemployed adult.\n";
        }
    } else {
        // Else condition: age is less than 18 (minor)
        if ($age >= 13) {
            echo "You are a teenager.\n";
        } else {
            echo "You are a child.\n";
        }
    }
} else {
    echo "Please enter a valid numeric age.\n";
}

?>