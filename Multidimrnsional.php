<?php
// Multidimensional Array Example

// 1. Creating Multidimensional Arrays
$students = array(
    array("name" => "John", "age" => 25, "grade" => "A"),
    array("name" => "Jane", "age" => 30, "grade" => "B"),
    array("name" => "Doe", "age" => 22, "grade" => "C")
);

// 2. Accessing Array Elements
echo "First Student Name: " . $students[0]["name"] . "\n"; // Output: John
echo "Second Student Age: " . $students[1]["age"] . "\n"; // Output: 30

// 3. Adding Elements
$students[] = array("name" => "Alice", "age" => 28, "grade" => "A+");

// 4. Removing Elements
unset($students[2]); // Remove Doe's data

// 5. Merging Multidimensional Arrays
$newStudents = array(
    array("name" => "Mark", "age" => 24, "grade" => "B+"),
    array("name" => "Emily", "age" => 29, "grade" => "A")
);
$merged = array_merge($students, $newStudents);

// 6. Sorting Multidimensional Arrays (Sorting by a specific key)
usort($students, function ($a, $b) {
    return $a["age"] <=> $b["age"]; // Sort by age
});

// 7. Iterating through the multidimensional array
foreach ($students as $student) {
    echo $student["name"] . " is " . $student["age"] . " years old and has a grade of " . $student["grade"] . ".\n";
}

// 8. Filtering and Mapping (Example of filtering by age)
$adults = array_filter($students, function($student) {
    return $student["age"] > 25; // Keep only students older than 25
});

// 9. Slicing and Splicing
$slicedStudents = array_slice($students, 1, 2); // Slice two students starting from index 1

// Final print
print_r($merged); // Merged array
print_r($adults); // Filtered array (students older than 25)
print_r($slicedStudents); // Sliced students array
?>
