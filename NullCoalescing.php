<?php

// Example variables
$username = null; // This variable is not set
$defaultUsername = "Guest"; // Default username

// Using the null coalescing operator
$currentUser = $username ?? $defaultUsername;

echo "Current User: $currentUser\n"; // Outputs: Current User: Guest

// Another example with a variable set
$username = "JohnDoe"; // Now this variable is set

// Using the null coalescing operator again
$currentUser = $username ?? $defaultUsername;

echo "Current User: $currentUser\n"; // Outputs: Current User: JohnDoe

// Example with array access
$userSettings = [
    "theme" => "dark",
    // "language" => "English", // This key is not set
];

// Using the null coalescing operator to provide a default language
$language = $userSettings['language'] ?? 'English';
echo "Language: $language\n"; // Outputs: Language: English
//Adavance topic part of class
class User {
    private $username;
    private $defaultUsername = "Guest"; // Default username

    // Constructor to initialize username
    public function __construct($username = null) {
        $this->username = $username;
    }

    // Method to get the current user
    public function getCurrentUser() {
        return $this->username ?? $this->defaultUsername; // Null coalescing operator
    }
}

// Example usage
$user1 = new User(); // No username provided, should default to "Guest"
echo "Current User: " . $user1->getCurrentUser() . "\n"; // Outputs: Current User: Guest

$user2 = new User("JohnDoe"); // Username provided
echo "Current User: " . $user2->getCurrentUser() . "\n"; // Outputs: Current User: JohnDoe

?>
