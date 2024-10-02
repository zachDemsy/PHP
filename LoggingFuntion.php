<?php
function logMessage($level, ...$messages) {
    foreach ($messages as $message) {
        echo "[$level]: $message\n";
    }
}
// Calling the function
logMessage("INFO", "Application started", "Database connected", "User logged in");
logMessage("ERROR", "File not found", "Permission denied");
?>
    