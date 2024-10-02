<?php
$name = 'Alice';// single Quotes
$string2 = "Hello, $name!";//double Quotes
$greeting = "Hello, " . $name . "!";//concatend 
$length = strlen($greeting); // Gets the length of the greeting string
$position = strpos($greeting, 'Alice'); // Returns the position of 'Alice' in the string
$wordconvent = str_word_count($name);// string word count
$substring = substr($greeting, 7, 5); // Extracts 'Alice'
$uppercase = strtoupper($greeting); // Converts to uppercase
$lowercase = strtolower($greeting); // Converts to lowercase
$trimmedString = trim("   Hello, World!   "); // Results in 'Hello, World!'
$newString = str_replace('World', 'PHP', $greeting); // Replaces 'World' with 'PHP'

// Store variables in an associative array
$variables = [
    'Name' => $name,
    'String 2' => $string2,
    'Greeting' => $greeting,
    'Length of greeting' => $length,
    'Position of Alice' => $position,
    'Word Count in Name' => $wordconvent,
    'Substring' => $substring,
    'Uppercase Greeting' => $uppercase,
    'Lowercase Greeting' => $lowercase,
    'Trimmed String' => $trimmedString,
    'New String' => $newString,
];

// Loop through the array and print each variable
foreach ($variables as $key => $value) {
    echo "$key: $value\n"; // Using \n for new line (use <br> if in a browser)
}
?>
