<?php

// For loop to print numbers from 1 to 5
for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i\n";
}
//decrement loop
for ($i = 5; $i >= 1; $i--) {
    echo "Number: $i\n";
}
//for loop for array
$colors = array("red", "green", "blue");
for ($i = 0; $i < count($colors); $i++) {
    echo "Color : $colors[$i] \n";
}
//Skipping and Exiting for loop
for ($i = 1; $i <= 10; $i++) {
    // Skip numbers divisible by 3
    if ($i % 3 == 0) {
        continue;
    }
    
    // Stop the loop if $i is 8
    if ($i == 8) {
        break;
    }
    
    echo "Number: $i\n";
}

?>
