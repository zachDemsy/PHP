<?php
$a = 10;
$a += 5; // Equivalent to $a = $a + 5
echo $a."\n"; // Outputs: 15
//All the AssignmentOperations (//Advance Topic part of class) 
class AssignmentOperations {
    // Private property to hold a value
    private $value;

    // Constructor to initialize the value
    public function __construct($initialValue) {
        $this->value = $initialValue;
    }

    // Method to get the current value
    public function getValue() {
        return $this->value;
    }

    // Method to set a new value
    public function setValue($newValue) {
        $this->value = $newValue;
    }

    // Method to add a number to the current value
    public function add($number) {
        $this->value += $number; // Assignment operation
    }

    // Method to subtract a number from the current value
    public function subtract($number) {
        $this->value -= $number; // Assignment operation
    }

    // Method to multiply the current value by a number
    public function multiply($number) {
        $this->value *= $number; // Assignment operation
    }

    // Method to divide the current value by a number
    public function divide($number) {
        if ($number == 0) {
            return "Error: Division by zero!";
        }
        $this->value /= $number; // Assignment operation
    }
}

// Usage of the AssignmentOperations class
$assignment = new AssignmentOperations(10); // Initial value of 10

echo "Initial Value: " . $assignment->getValue() . "\n"; // Outputs: 10

$assignment->add(5);
echo "After Addition (5): " . $assignment->getValue() . "\n"; // Outputs: 15

$assignment->subtract(3);
echo "After Subtraction (3): " . $assignment->getValue() . "\n"; // Outputs: 12

$assignment->multiply(4);
echo "After Multiplication (4): " . $assignment->getValue() . "\n"; // Outputs: 48

$assignment->divide(12);
echo "After Division (12): " . $assignment->getValue() . "\n"; // Outputs: 4

// Trying to divide by zero
echo $assignment->divide(0) . "\n"; // Outputs: Error: Division by zero!

?>