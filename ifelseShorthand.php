<?php

// Take input from the user using readline(), allowing empty input
$user_name = readline("Please enter your name (leave blank for 'Guest'): ");

// Use the null coalescing operator to set a default value if no input is given
$display_name = $user_name ?? "Guest";

// If the user inputs nothing, treat it as null and assign "Guest"
$display_name = ($user_name !== "") ? $user_name : "Guest";

echo "Hello, $display_name!\n";

?>
