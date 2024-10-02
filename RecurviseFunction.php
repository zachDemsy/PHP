<?php
function fibonacci($n) {
    // Base cases: return 0 for F(0) and 1 for F(1)
    if ($n == 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    }

    // Recursive case: return the sum of the two previous Fibonacci numbers
    return fibonacci($n - 1) + fibonacci($n - 2);
}

// Test the fibonacci function
echo "\n".fibonacci(6);  // Output: 8
                                            //Sum of Array
function sumArray($arr, $index) {
    // Base case: when we've gone through all the elements
    if ($index == count($arr)) {
        return 0;
    }

    // Recursive case: return the current element plus the sum of the rest of the array
    return $arr[$index] + sumArray($arr, $index + 1);
}

// Test array
$numbers = [1, 2, 3, 4, 5];

// Calculate the sum of the array
echo "\n".sumArray($numbers, 0);  // Output: 15
                                                //Traversing a Directory
function listFiles($dir) {
    // Open the directory
    if ($handle = opendir($dir)) {
        // Loop through the directory contents
        while (false !== ($file = readdir($handle))) {
            // Skip '.' and '..'
            if ($file != '.' && $file != '..') {
                // If it's a directory, recurse into it
                if (is_dir($dir . '/' . $file)) {
                    listFiles($dir . '/' . $file);
                } else {
                    // Print the file name
                    echo $dir . '/' . $file . "\n";
                }
            }
        }
        closedir($handle);
    }
}

// Call the function to list all files in a directory
listFiles('D:\work\laravel\w3school\PHP'); // Add your know Directory

?>
