<?php

function greet($greeting, ...$names) {
    foreach ($names as $name) {
        echo "$greeting, $name!\n";
    }
}

// Calling the function
greet("Hello", "Alice", "Bob", "Charlie");

// Output:
// Hello, Alice!
// Hello, Bob!
// Hello, Charlie!
        //With type Hinting
function multiply(int ...$numbers) {
    $product = 1;
    foreach ($numbers as $number) {
        $product *= $number;
    }
    return $product;
}

// Calling the function with integers
echo "\n".multiply(2, 3, 4);  // Output: 24

// Calling the function with a mix of integers and strings will result in a type error
// echo "\n".multiply(2, "3", 4);  // Will cause a TypeError
                //Pass an Array
function sum(...$numbers) {
    return array_sum($numbers);
}

// Array of numbers
$numbersArray = [1, 2, 3, 4];

// Use the spread operator to pass the array elements as individual arguments
echo sum(...$numbersArray);  // Output: 10
// partical Use Case is in LoggingFunction.php
?>

