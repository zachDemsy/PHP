<?php

$counter = 0;
$max_value = 10;

do {
    echo "Counter: $counter, Max Value: $max_value\n";
    
    // Increment the counter and decrement the max_value
    $counter++;
    $max_value--;
} while ($counter < 5 && $max_value > 0);

?>
