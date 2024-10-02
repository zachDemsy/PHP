<?php
// Initial value
$value = 5;

echo "Initial Value: " . $value . "\n"; // Outputs: 5

// Prefix Increment
$prefixIncrement = ++$value; // Increment before using the value
echo "After Prefix Increment: " . $prefixIncrement . "\n"; // Outputs: 6
echo "Current Value: " . $value . "\n"; // Outputs: 6

// Postfix Increment
$postfixIncrement = $value++; // Use the value before incrementing
echo "After Postfix Increment: " . $postfixIncrement . "\n"; // Outputs: 6 (value before increment)
echo "Current Value: " . $value . "\n"; // Outputs: 7

// Prefix Decrement
$prefixDecrement = --$value; // Decrement before using the value
echo "After Prefix Decrement: " . $prefixDecrement . "\n"; // Outputs: 6
echo "Current Value: " . $value . "\n"; // Outputs: 6

// Postfix Decrement
$postfixDecrement = $value--; // Use the value before decrementing
echo "After Postfix Decrement: " . $postfixDecrement . "\n"; // Outputs: 6 (value before decrement)
echo "Current Value: " . $value . "\n"; // Outputs: 5
// All Increment&decrement operator (Adavance topic parrt of class)
class IncrementDecrement {
    private $value;

    // Constructor to initialize the value
    public function __construct($value) {
        $this->value = $value;
    }

    // Method to increment value using prefix
    public function incrementPrefix() {
        return ++$this->value; // Prefix increment
    }

    // Method to increment value using postfix
    public function incrementPostfix() {
        return $this->value++; // Postfix increment
    }

    // Method to decrement value using prefix
    public function decrementPrefix() {
        return --$this->value; // Prefix decrement
    }

    // Method to decrement value using postfix
    public function decrementPostfix() {
        return $this->value--; // Postfix decrement
    }

    // Method to get the current value
    public function getValue() {
        return $this->value;
    }
}

// Usage of the IncrementDecrement class
$value = 5;
$incrementDecrement = new IncrementDecrement($value);

echo "Initial Value: " . $incrementDecrement->getValue() . "\n"; // Outputs: 5

// Prefix Increment
echo "Prefix Increment: " . $incrementDecrement->incrementPrefix() . "\n"; // Outputs: 6
echo "Current Value after Prefix Increment: " . $incrementDecrement->getValue() . "\n"; // Outputs: 6

// Postfix Increment
echo "Postfix Increment: " . $incrementDecrement->incrementPostfix() . "\n"; // Outputs: 6 (but value becomes 7)
echo "Current Value after Postfix Increment: " . $incrementDecrement->getValue() . "\n"; // Outputs: 7

// Prefix Decrement
echo "Prefix Decrement: " . $incrementDecrement->decrementPrefix() . "\n"; // Outputs: 6
echo "Current Value after Prefix Decrement: " . $incrementDecrement->getValue() . "\n"; // Outputs: 6

// Postfix Decrement
echo "Postfix Decrement: " . $incrementDecrement->decrementPostfix() . "\n"; // Outputs: 6 (but value becomes 5)
echo "Current Value after Postfix Decrement: " . $incrementDecrement->getValue() . "\n"; // Outputs: 5
?>
