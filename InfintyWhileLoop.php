<?php

// Infinite loop (no condition update)
$counter = 1;

while ($counter <= 5) {
    echo "This will run forever!";
    // Missing the increment of $counter, so the condition never changes
}

?>