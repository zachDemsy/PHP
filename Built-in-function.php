<?php

// 1. String Functions
echo "String Functions:\n";
$exampleString = "  Hello World!  ";
echo "Original String: '$exampleString'\n";
echo "Length of the string: " . strlen($exampleString) . "\n";
echo "Uppercase: " . strtoupper($exampleString) . "\n";
echo "Lowercase: " . strtolower($exampleString) . "\n";
echo "Trimmed: '" . trim($exampleString) . "'\n";
echo "Replace 'World' with 'PHP': " . str_replace("World", "PHP", $exampleString) . "\n";
echo "\n";

// 2. Array Functions
echo "Array Functions:\n";
$exampleArray = [1, 2, 3, 4, 5];
echo "Original Array: ";
print_r($exampleArray);
echo "Array Length: " . count($exampleArray) . "\n";
echo "Array in Reverse: ";
print_r(array_reverse($exampleArray));
echo "Array Sum: " . array_sum($exampleArray) . "\n";
echo "Array with 6 added: ";
array_push($exampleArray, 6);
print_r($exampleArray);
echo "\n";

// 3. Math Functions
echo "Math Functions:\n";
echo "Absolute value of -10: " . abs(-10) . "\n";
echo "Max of [1, 3, 5, 7]: " . max([1, 3, 5, 7]) . "\n";
echo "Min of [1, 3, 5, 7]: " . min([1, 3, 5, 7]) . "\n";
echo "Square root of 16: " . sqrt(16) . "\n";
echo "Random number between 1 and 100: " . rand(1, 100) . "\n";
echo "\n";

// 4. Date and Time Functions
echo "Date and Time Functions:\n";
echo "Current Date: " . date("Y-m-d H:i:s") . "\n";
echo "Unix Timestamp: " . time() . "\n";
echo "Date 7 days from now: " . date("Y-m-d", strtotime("+7 days")) . "\n";
echo "\n";

// 5. File Handling Functions (Writing and Reading from a File)
echo "File Handling Functions:\n";
$filename = "example.txt";
$content = "Hello, this is an example of file handling in PHP.\n";

// Writing to a file
file_put_contents($filename, $content);
echo "Content written to file: $filename\n";

// Reading from a file
$fileContent = file_get_contents($filename);
echo "File content: $fileContent";

// Deleting the file
unlink($filename);
echo "File deleted: $filename\n";
echo "\n";

// 6. Error Handling Functions
echo "Error Handling Functions:\n";
function customError($errno, $errstr) {
    echo "Error [$errno]: $errstr\n";
}
set_error_handler("customError");

// Triggering a custom error
trigger_error("This is a custom error.", E_USER_WARNING);
echo "\n";

// 7. Miscellaneous Functions
echo "Miscellaneous Functions:\n";

// Checking if a variable is set
$var = "PHP";
echo "Is \$var set? " . (isset($var) ? "Yes" : "No") . "\n";

// Checking if a variable is empty
$emptyVar = "";
echo "Is \$emptyVar empty? " . (empty($emptyVar) ? "Yes" : "No") . "\n";

// Debugging variables
echo "Debugging \$var with var_dump: ";
var_dump($var);

// Exiting the script
echo "Ending script with exit...\n";
exit(0);

?>
