<?php

// Initialize the counter
$counter = 1;

do {
    // Print the current value of the counter
    echo "Counter value: $counter\n";
    
    // Increment the counter
    $counter++;
} while ($counter <= 5);
//using  while loop with user input
// Declare a variable to store the user's input
$number = 0;

do {
    // Ask the user to input a number greater than 10
    $number = readline("Enter a number greater than 10: ");
} while ($number <= 10);

echo "You entered a valid number: $number\n";
//Breaking Out of DO...While Loop
$counter = 1;
do {
    echo "Counter: $counter\n";
    
    // Break the loop when the counter reaches 5
    if ($counter == 5) {
        echo "Breaking out of the loop.\n";
        break;
    }
    
    // Increment the counter
    $counter++;
} while ($counter <= 10);
echo "Loop ended.\n";

?>
