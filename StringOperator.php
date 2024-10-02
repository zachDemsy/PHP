<?php
// Concatenation operator
$string1 = "Hello ";
$string2 = "World";

// Using the concatenation operator
$greeting = $string1 . $string2;
echo "Concatenation: " . $greeting . "\n"; // Outputs: Hello World

// Concatenation assignment operator
$baseString = "Hello";
$baseString .= " World"; // Appends " World" to $baseString
echo "Concatenation Assignment: " . $baseString . "\n"; // Outputs: Hello World

// Concatenating multiple strings
$firstName = "John";
$lastName = "Doe";
$fullName = $firstName . " " . $lastName; // Combining first and last name
echo "Full Name: " . $fullName . "\n"; // Outputs: John Doe

// Using variables and string operators together
$age = 30;
$info = $fullName . " is " . $age . " years old.";
echo "Info: " . $info . "\n"; // Outputs: John Doe is 30 years old.
//All stringOperations (Adavance topic )
class StringOperations {
    private $baseString;

    // Constructor to initialize the base string
    public function __construct($string) {
        $this->baseString = $string;
    }

    // Method to concatenate a string
    public function concatenate($stringToAppend) {
        return $this->baseString . $stringToAppend; // Using concatenation operator
    }

    // Method to append a string using concatenation assignment
    public function append($stringToAppend) {
        $this->baseString .= $stringToAppend; // Using concatenation assignment operator
    }

    // Method to get the current value of the base string
    public function getBaseString() {
        return $this->baseString;
    }
}

// Usage of the StringOperations class
$stringOps = new StringOperations("Hello");

// Using the concatenate method
$greeting = $stringOps->concatenate(" World");
echo "Concatenation: " . $greeting . "\n"; // Outputs: Hello World

// Appending a string
$stringOps->append(" everyone!");
echo "After Append: " . $stringOps->getBaseString() . "\n"; // Outputs: Hello everyone!

// Appending another string
$stringOps->append(" How are you?");
echo "After Another Append: " . $stringOps->getBaseString() . "\n"; // Outputs: Hello everyone! How are you?

?>
