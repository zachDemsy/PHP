<?php

class ArrayOperatorDemo {
    private $array1;
    private $array2;

    // Constructor to initialize arrays
    public function __construct($array1, $array2) {
        $this->array1 = $array1;
        $this->array2 = $array2;
    }

    // Method to demonstrate the Union Operator
    public function getUnion() {
        return $this->array1 + $this->array2; // Union operator
    }

    // Method to demonstrate the Equality Operator
    public function areEqual() {
        return $this->array1 == $this->array2; // Equality operator
    }

    // Method to demonstrate the Identity Operator
    public function areIdentical() {
        return $this->array1 === $this->array2; // Identity operator
    }

    // Method to demonstrate the Inequality Operator
    public function areNotEqual() {
        return $this->array1 != $this->array2; // Inequality operator
    }

    // Method to demonstrate the Non-identity Operator
    public function areNotIdentical() {
        return $this->array1 !== $this->array2; // Non-identity operator
    }
}

// Example usage
$array1 = array("a" => "Apple", "b" => "Banana");
$array2 = array("b" => "Berry", "c" => "Citrus");

$arrayDemo = new ArrayOperatorDemo($array1, $array2);

// Union
echo "Union: ";
print_r($arrayDemo->getUnion()); // Outputs the union of $array1 and $array2

// Equality
if ($arrayDemo->areEqual()) {
    echo "Array1 is equal to Array2.\n";
} else {
    echo "Array1 is not equal to Array2.\n"; // This will be output
}

// Identity
if ($arrayDemo->areIdentical()) {
    echo "Array1 is identical to Array2.\n";
} else {
    echo "Array1 is not identical to Array2.\n"; // This will be output
}

// Inequality
if ($arrayDemo->areNotEqual()) {
    echo "Array1 is not equal to Array2.\n"; // This will be output
} else {
    echo "Array1 is equal to Array2.\n";
}

// Non-identity
if ($arrayDemo->areNotIdentical()) {
    echo "Array1 is not identical to Array2.\n"; // This will be output
} else {
    echo "Array1 is identical to Array2.\n";
}

?>
