<?php
$num = 10;//Interger
$str1 = "Hello/World!";//string
$a = (string)$num; // Casting integer to string
$b = (int)$str1;   // Casting string to integer
$c = (float)$num;  // Casting integer to float
$d = (bool)$str1;  // Casting string to boolean
$e = (array)$num;  // Casting integer to array
$f = (object)$str1; // Casting string to object

// Putting all variables in an array
$variables = [
    'a' => $a,
    'b' => $b,
    'c' => $c,
    'd' => $d,
    'e' => $e,
    'f' => $f
];

// Using foreach to iterate and var_dump each variable
foreach ($variables as $key => $value) {
    echo "Variable \$$key: \n";
    var_dump($value);
    echo "\n"; // Adding a new line for better readability
}
?>
