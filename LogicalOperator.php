<?php
// Variables for demonstration
$a = true;
$b = false;
$c = true;

// Logical AND (&&)
var_dump($a && $b);  // Outputs: bool(false)

// Logical OR (||)
var_dump($a || $b);  // Outputs: bool(true)

// Logical NOT (!)
var_dump(!$a);       // Outputs: bool(false)

// Logical AND (and)
var_dump($a and $b); // Outputs: bool(false)

// Logical OR (or)
var_dump($a or $b);  // Outputs: bool(true)

// Logical XOR (xor)
var_dump($a xor $b); // Outputs: bool(true)
//All logical operator (Adavance topic part of class)
class LogicalOperations {
    private $value1;
    private $value2;

    // Constructor to initialize the values
    public function __construct($value1, $value2) {
        $this->value1 = $value1;
        $this->value2 = $value2;
    }

    // Method to check logical AND (&&)
    public function logicalAnd() {
        return $this->value1 && $this->value2; // Using &&
    }

    // Method to check logical OR (||)
    public function logicalOr() {
        return $this->value1 || $this->value2; // Using ||
    }

    // Method to check logical NOT (!)
    public function logicalNot() {
        return !$this->value1; // Using !
    }

    // Method to check logical AND (and)
    public function logicalAndLower() {
        return $this->value1 and $this->value2; // Using and
    }

    // Method to check logical OR (or)
    public function logicalOrLower() {
        return $this->value1 or $this->value2; // Using or
    }

    // Method to check logical XOR (xor)
    public function logicalXor() {
        return $this->value1 xor $this->value2; // Using xor
    }
}

// Usage of the LogicalOperations class
$value1 = true;  // Change these values for testing
$value2 = false; // Change these values for testing
$logicalOps = new LogicalOperations($value1, $value2);
echo "Logical AND (&&): " . ($logicalOps->logicalAnd() ? 'true' : 'false') . "\n"; // Outputs: false
echo "Logical OR (||): " . ($logicalOps->logicalOr() ? 'true' : 'false') . "\n";   // Outputs: true
echo "Logical NOT (!): " . ($logicalOps->logicalNot() ? 'true' : 'false') . "\n"; // Outputs: false
echo "Logical AND (and): " . ($logicalOps->logicalAndLower() ? 'true' : 'false') . "\n"; // Outputs: false
echo "Logical OR (or): " . ($logicalOps->logicalOrLower() ? 'true' : 'false') . "\n"; // Outputs: true
echo "Logical XOR (xor): " . ($logicalOps->logicalXor() ? 'true' : 'false') . "\n"; // Outputs: true
?>
