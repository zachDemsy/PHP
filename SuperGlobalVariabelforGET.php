<?php
// Superglobal function to fetch GET parameters
function fetchGetData() {
    if (isset($_GET['name']) && isset($_GET['age'])) {
        $name = $_GET['name'];  // Accessing superglobal $_GET
        $age = $_GET['age'];    // Accessing superglobal $_GET
        return "Name: $name, Age: $age";
    } else {
        return "No data found!";
    }
}

// Call the function and print the result
echo fetchGetData();
?>
