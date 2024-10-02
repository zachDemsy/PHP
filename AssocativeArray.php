<?php
// Associative Array Example

// 1. Creating Associative Arrays
$ages = array("John" => 25, "Jane" => 30, "Doe" => 22);
$salaries = ["Manager" => 5000, "Engineer" => 4000, "Clerk" => 3000];

// 2. Accessing Array Elements
echo "John's Age: " . $ages["John"] . "\n"; // Output: 25
echo "Manager Salary: " . $salaries["Manager"] . "\n"; // Output: 5000

// 3. Adding Elements
$ages["Alice"] = 35; // Adding new element
$salaries["Intern"] = 1500;

// 4. Removing Elements
unset($ages["Doe"]); // Remove Doe from the array
unset($salaries["Clerk"]); // Remove Clerk

// 5. Merging Associative Arrays
$merged = array_merge($ages, $salaries);

// 6. Sorting Arrays
asort($ages); // Sort by value, maintain key association
ksort($salaries); // Sort by key

// 7. Iterating through the array
foreach ($ages as $name => $age) {
    echo "$name is $age years old.\n"; // Output: sorted ages by value
}

// 8. Searching in Arrays
if (array_key_exists("Jane", $ages)) {
    echo "Jane is in the array.\n";
}
if (in_array(5000, $salaries)) {
    echo "There is a salary of 5000 in the salaries array.\n";
}

// 9. Splicing and Slicing (Not typically used with associative arrays)
$chunked = array_chunk($ages, 2, true); // Chunk the array into pieces

// Final print
print_r($merged); // Merged array
print_r($chunked); // Chunked associative array
?>
