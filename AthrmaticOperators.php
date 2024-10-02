<?php
$a = 10;
$b = 3;

echo $a + $b ."\n"; // Outputs: 13
echo $a - $b."\n"; // Outputs: 7
echo $a * $b."\n"; // Outputs: 30
echo $a / $b."\n"; // Outputs: 3.3333...
echo $a % $b."\n"; // Outputs: 1
echo $a ** $b."\n"; // Outputs: 1000
//All the Arthimetic operations (//Advance Topic part of class )
class ArithmeticOperations {
    // Properties to hold the numbers
    private $num1;
    private $num2;
    // Constructor to initialize the numbers
    public function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }
    // Method for addition
    public function add() {
        return $this->num1 + $this->num2;
    }
    // Method for subtraction
    public function subtract() {
        return $this->num1 - $this->num2;
    }
    // Method for multiplication
    public function multiply() {
        return $this->num1 * $this->num2;
    }
    // Method for division
    public function divide() {
        if ($this->num2 == 0) {
            return "Error: Division by zero!";
        }
        return $this->num1 / $this->num2;
    }
}
// Usage of the ArithmeticOperations class
$num1 = 10;
$num2 = 5;
$calculator = new ArithmeticOperations($num1, $num2);
echo "Addition: " . $calculator->add() . "\n";          // Outputs: 15
echo "Subtraction: " . $calculator->subtract() . "\n";  // Outputs: 5
echo "Multiplication: " . $calculator->multiply() . "\n"; // Outputs: 50
echo "Division: " . $calculator->divide() . "\n";      // Outputs: 2
?>