<?php
// Multidimensional array
$students = [
    ["name" => "Alice", "age" => 20],
    ["name" => "Bob", "age" => 22],
    ["name" => "Charlie", "age" => 18]
];
// Iterate over the outer array
foreach ($students as $student) {
    // Iterate over the inner associative array
    foreach ($student as $key => $value) {
        echo "$key: $value\n";
    }
    echo "--------\n";  // Divider between students
}
?>
