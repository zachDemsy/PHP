<?php
// Indexed Array Example

// 1. Creating Indexed Arrays
$fruits = array("Apple", "Banana", "Orange"); // Using array()
$colors = ["Red", "Green", "Blue"]; // Using shorthand

// 2. Accessing Array Elements
echo "First Fruit: " . $fruits[0] . "\n"; // Output: Apple
echo "Second Color: " . $colors[1] . "\n"; // Output: Green

// 3. Adding Elements
array_push($fruits, "Mango"); // Add to end
array_unshift($colors, "Yellow"); // Add to start

// 4. Removing Elements
array_pop($fruits); // Removes last element (Mango)
array_shift($colors); // Removes first element (Yellow)

// 5. Merging Arrays
$merged = array_merge($fruits, $colors);

// 6. Sorting Arrays
sort($fruits); // Sort in ascending order
rsort($colors); // Sort in descending order

// 7. Iterating through the array using foreach
foreach ($fruits as $fruit) {
    echo $fruit . "\n"; // Output: sorted fruits
}

// 8. Filtering and Mapping
$numbers = [1, 2, 3, 4, 5];
$evenNumbers = array_filter($numbers, function($num) {
    return $num % 2 == 0;
});
$squaredNumbers = array_map(function($num) {
    return $num * $num;
}, $numbers);

print_r($evenNumbers); // Filtered even numbers
print_r($squaredNumbers); // Squared numbers

// 9. Slicing and Splicing
$slicedFruits = array_slice($fruits, 1, 2); // Slice out two elements
array_splice($fruits, 1, 1, ["Pineapple"]); // Replace elements

// Final print
print_r($merged); // Merged array
print_r($slicedFruits); // Sliced array
print_r($fruits); // Modified fruits array after splicing
?>
