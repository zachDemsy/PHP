<?php

// Initialize a counter variable
$counter = 1;

// While the counter is less than or equal to 5, run the loop
while ($counter <= 5) {
    echo "Counter value: $counter\n";
    
    // Increment the counter by 1
    $counter++;
}
//user input while loop
// Initialize a variable
$number = readline("Enter a number between 0-10 ");

// Continue looping as long as $number is less than or equal to 10
while ($number <= 10) {
    // Prompt the user for a number
    $number = readline("Enter a number greater than 10 ");
}

echo "You entered a valid number: $number\n";
//braking out of a while loop with break
$counter = 1;

while ($counter <= 10) {
    echo "Counter: $counter\n";
    
    // Break out of the loop when the counter reaches 5
    if ($counter == 5) {
        echo "Breaking out of the loop.\n";
        break;
    }
    
    $counter++;
}

echo "Loop ended.\n";
?>
