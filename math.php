<?php

// 1. Basic Mathematical Operations
$number1 = 10;
$number2 = 3;

// Addition
$addition = $number1 + $number2;
echo "Addition: $number1 + $number2 = $addition\n";

// Subtraction
$subtraction = $number1 - $number2;
echo "Subtraction: $number1 - $number2 = $subtraction\n";

// Multiplication
$multiplication = $number1 * $number2;
echo "Multiplication: $number1 * $number2 = $multiplication\n";

// Division
$division = $number1 / $number2;
echo "Division: $number1 / $number2 = $division\n";

// Modulo
$modulo = $number1 % $number2;
echo "Modulo: $number1 % $number2 = $modulo\n\n";

// 2. Using PHP Math Functions

// Absolute value
$negativeNumber = -15;
$absoluteValue = abs($negativeNumber);
echo "Absolute value of $negativeNumber: $absoluteValue\n";

// Ceiling
$floatNumber1 = 4.3;
$ceilingValue = ceil($floatNumber1);
echo "Ceiling of $floatNumber1: $ceilingValue\n";

// Floor
$floatNumber2 = 4.7;
$floorValue = floor($floatNumber2);
echo "Floor of $floatNumber2: $floorValue\n";

// Round
$floatNumber3 = 4.5;
$roundedValue = round($floatNumber3);
echo "Round of $floatNumber3: $roundedValue\n";

// Square Root
$squareRootInput = 16;
$squareRootValue = sqrt($squareRootInput);
echo "Square root of $squareRootInput: $squareRootValue\n";

// Power
$base = 2;
$exponent = 3;
$powerValue = pow($base, $exponent);
echo "$base raised to the power of $exponent: $powerValue\n";

// Maximum and Minimum
$maxValue = max(1, 5, 3, 10);
$minValue = min(1, 5, 3, 10);
echo "Maximum value: $maxValue\n";
echo "Minimum value: $minValue\n";

// Random Number
$randomNumber = rand(1, 100);
echo "Random number between 1 and 100: $randomNumber\n";

// 3. Using Constants
echo "Value of π (M_PI): " . M_PI . "\n";
echo "Value of e (M_E): " . M_E . "\n";

// 4. Putting it all together in a summary
echo "\nSummary of calculations:\n";
echo "--------------------------------\n";
echo "Addition: $number1 + $number2 = $addition\n";
echo "Subtraction: $number1 - $number2 = $subtraction\n";
echo "Multiplication: $number1 * $number2 = $multiplication\n";
echo "Division: $number1 / $number2 = $division\n";
echo "Modulo: $number1 % $number2 = $modulo\n";
echo "Absolute value of $negativeNumber: $absoluteValue\n";
echo "Ceiling of $floatNumber1: $ceilingValue\n";
echo "Floor of $floatNumber2: $floorValue\n";
echo "Round of $floatNumber3: $roundedValue\n";
echo "Square root of $squareRootInput: $squareRootValue\n";
echo "$base raised to the power of $exponent: $powerValue\n";
echo "Maximum value: $maxValue\n";
echo "Minimum value: $minValue\n";
echo "Random number between 1 and 100: $randomNumber\n";
echo "Value of π (M_PI): " . M_PI . "\n";
echo "Value of e (M_E): " . M_E . "\n";

?>
