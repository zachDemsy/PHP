<?php
// === Array Operators ===

// Define two arrays for demonstration
$array1 = array("a" => "Apple", "b" => "Banana");
$array2 = array("b" => "Berry", "c" => "Citrus");

// Union Operator
$union = $array1 + $array2; // Combines $array1 and $array2
echo "Union: ";
print_r($union); // Outputs: Array ( [a] => Apple [b] => Banana [c] => Citrus )

// Equality Operator
$array3 = array("a" => "Apple", "b" => "Banana");
if ($array1 == $array3) {
    echo "Array1 is equal to Array3.\n"; // This will be output
} else {
    echo "Array1 is not equal to Array3.\n";
}

// Identity Operator
$array4 = array("a" => "Apple", "b" => "Banana");
if ($array1 === $array4) {
    echo "Array1 is identical to Array4.\n"; // This will be output
} else {
    echo "Array1 is not identical to Array4.\n";
}

// Inequality Operator
if ($array1 != $array2) {
    echo "Array1 is not equal to Array2.\n"; // This will be output
} else {
    echo "Array1 is equal to Array2.\n";
}

// Non-identity Operator
if ($array1 !== $array4) {
    echo "Array1 is not identical to Array4.\n"; // This will NOT be output
} else {
    echo "Array1 is identical to Array4.\n"; // This will be output
}
?>
