<?php
// Superglobal function to fetch POST data
function fetchPostData() {
    if (isset($_POST['name']) && isset($_POST['age'])) {
        $name = $_POST['name'];  // Accessing superglobal $_POST
        $age = $_POST['age'];    // Accessing superglobal $_POST
        return "Name: $name, Age: $age";
    } else {
        return "No data found!";
    }
}
?>