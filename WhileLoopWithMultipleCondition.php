<?php

$counter = 0;
$max_value = 10;

// Continue looping as long as the counter is less than 5 and the max_value is greater than 0
while ($counter < 5 && $max_value > 0) {
    echo "Counter: $counter, Max Value: $max_value\n";
    
    // Increment the counter and decrement the max_value
    $counter++;
    $max_value--;
}
?>
