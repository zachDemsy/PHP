<?php

// Define a 2D array (matrix)
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

// Outer loop for rows
for ($i = 0; $i < 3; $i++) {
    // Inner loop for columns
    for ($j = 0; $j < 3; $j++) {
        echo $matrix[$i][$j] . " ";
    }
    echo "\n";  // Newline after each row
}

// Get the size of the square from user input
$size = readline("Enter the size of the square: ");

// Nested for loop to display a pattern
for ($i = 1; $i <= $size; $i++) {
    for ($j = 1; $j <= $size; $j++) {
        // Print the column number in each row
        echo $j . " ";
    }
    echo "\n";  // New line after each row
}

?>
