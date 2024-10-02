<?php
$a = 5;
$b = 10;
$c = '5';

// Equal to operator
var_dump($a == $c);  // Outputs: bool(true) because values are equal

// Identical operator
var_dump($a === $c); // Outputs: bool(false) because types are different (int vs string)

// Not equal to operator
var_dump($a != $b);  // Outputs: bool(true) because values are different

// Not identical operator
var_dump($a !== $c); // Outputs: bool(true) because types are different

// Greater than operator
var_dump($a > $b);   // Outputs: bool(false) because 5 is not greater than 10

// Less than operator
var_dump($a < $b);   // Outputs: bool(true) because 5 is less than 10

// Greater than or equal to operator
var_dump($a >= 5);   // Outputs: bool(true) because 5 is equal to 5

// Less than or equal to operator
var_dump($b <= 10);  // Outputs: bool(true) because 10 is equal to 10
//All ComparisonOperators (//Advance topic part of class)
class ComparisonOperations {
    private $value1;
    private $value2;

    // Constructor to initialize the values
    public function __construct($value1, $value2) {
        $this->value1 = $value1;
        $this->value2 = $value2;
    }

    // Method to check if values are equal
    public function isEqual() {
        return $this->value1 == $this->value2; // Using ==
    }

    // Method to check if values are identical
    public function isIdentical() {
        return $this->value1 === $this->value2; // Using ===
    }

    // Method to check if values are not equal
    public function isNotEqual() {
        return $this->value1 != $this->value2; // Using !=
    }

    // Method to check if values are not identical
    public function isNotIdentical() {
        return $this->value1 !== $this->value2; // Using !==
    }

    // Method to check if value1 is greater than value2
    public function isGreaterThan() {
        return $this->value1 > $this->value2; // Using >
    }

    // Method to check if value1 is less than value2
    public function isLessThan() {
        return $this->value1 < $this->value2; // Using <
    }

    // Method to check if value1 is greater than or equal to value2
    public function isGreaterThanOrEqual() {
        return $this->value1 >= $this->value2; // Using >=
    }

    // Method to check if value1 is less than or equal to value2
    public function isLessThanOrEqual() {
        return $this->value1 <= $this->value2; // Using <=
    }
}

// Usage of the ComparisonOperations class
$value1 = 5;
$value2 = 10;
$comparison = new ComparisonOperations($value1, $value2);
echo "Is Equal: " . ($comparison->isEqual() ? 'true' : 'false') . "\n"; // Outputs: false
echo "Is Identical: " . ($comparison->isIdentical() ? 'true' : 'false') . "\n"; // Outputs: false
echo "Is Not Equal: " . ($comparison->isNotEqual() ? 'true' : 'false') . "\n"; // Outputs: true
echo "Is Not Identical: " . ($comparison->isNotIdentical() ? 'true' : 'false') . "\n"; // Outputs: true
echo "Is Greater Than: " . ($comparison->isGreaterThan() ? 'true' : 'false') . "\n"; // Outputs: false
echo "Is Less Than: " . ($comparison->isLessThan() ? 'true' : 'false') . "\n"; // Outputs: true
echo "Is Greater Than or Equal: " . ($comparison->isGreaterThanOrEqual() ? 'true' : 'false') . "\n"; // Outputs: false
echo "Is Less Than or Equal: " . ($comparison->isLessThanOrEqual() ? 'true' : 'false') . "\n"; // Outputs: true
?>
