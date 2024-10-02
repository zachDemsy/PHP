<?php

// Array of ages for demonstration
$ages = [15, 18, 20, 12, 30];

// Loop through each age and use the conditional operator
foreach ($ages as $age) {
    // Using the ternary operator to determine if someone is an adult or a minor
    $status = ($age >= 18) ? "Adult" : "Minor";
    echo "Age: $age - Status: $status\n";
}
//Advance topic part of class
class ConditionalOperatorDemo {
    // Method to demonstrate the conditional (ternary) operator
    public function checkAge($age) {
        // Using the ternary operator to determine if someone is an adult or not
        $status = ($age >= 18) ? "Adult" : "Minor";
        return $status;
    }
}

// Example usage
$conditionalDemo = new ConditionalOperatorDemo();

$ages1 = [10,20,65,48,50,68];

foreach ($ages1 as $age) {
    echo "Age: $age - Status: " . $conditionalDemo->checkAge($age) . "\n";
}
?>
