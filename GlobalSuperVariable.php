<?php
// Starting the session for using $_SESSION
session_start();

// 1. $_GET Example
// URL example: http://localhost/superglobals.php?name=John&age=25
if (isset($_GET['name']) && isset($_GET['age'])) {
    echo "GET - Name: " . $_GET['name'] . "<br>"; // Output: John
    echo "GET - Age: " . $_GET['age'] . "<br>";   // Output: 25
}

// 2. $_POST Example
// HTML form to demonstrate POST data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        echo "POST - Username: " . $_POST['username'] . "<br>";
        echo "POST - Password: " . $_POST['password'] . "<br>";
    }
}

// 3. $_REQUEST Example (This captures both GET and POST data)
if (isset($_REQUEST['name'])) {
    echo "REQUEST - Name from either GET or POST: " . $_REQUEST['name'] . "<br>";
}

// 4. $_SESSION Example
if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = 'JohnDoe';
}
echo "SESSION - Logged in user: " . $_SESSION['user'] . "<br>";

// 5. $_COOKIE Example
// Setting a cookie
if (!isset($_COOKIE['visit'])) {
    setcookie('visit', '1', time() + 3600); // Cookie expires in 1 hour
    echo "COOKIE - First visit!<br>";
} else {
    echo "COOKIE - You have visited before!<br>";
}

// 6. $_FILES Example
if (isset($_FILES['uploadFile'])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["uploadFile"]["name"]);
    
    if (move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $target_file)) {
        echo "FILES - The file " . basename($_FILES["uploadFile"]["name"]) . " has been uploaded.<br>";
    } else {
        echo "FILES - Error uploading file.<br>";
    }
}

// 7. $_ENV Example
echo "ENV - Server Name: " . $_ENV['SERVER_NAME'] . "<br>"; // Display environment variable

// 8. $_SERVER Example
echo "SERVER - Script Name: " . $_SERVER['PHP_SELF'] . "<br>";          // Output: /superglobals.php
echo "SERVER - Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";       // Output: localhost
echo "SERVER - Request Method: " . $_SERVER['REQUEST_METHOD'] . "<br>"; // Output: GET or POST
echo "SERVER - Client IP: " . $_SERVER['REMOTE_ADDR'] . "<br>";         // Output: Client IP

// 9. $_GLOBALS Example
$GLOBALS['myVar'] = "Global Variable Example";
echo "GLOBALS - " . $GLOBALS['myVar'] . "<br>";

?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Superglobals Example</title>
</head>
<body>

<h2>GET Form (for testing $_GET)</h2>
<a href="superglobals.php?name=John&age=25">Click here to send GET request</a>

<h2>POST Form (for testing $_POST)</h2>
<form method="POST" action="superglobals.php">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Submit POST Data">
</form>

<h2>File Upload (for testing $_FILES)</h2>
<form method="POST" enctype="multipart/form-data">
    Select file to upload: <input type="file" name="uploadFile">
    <input type="submit" value="Upload File">
</form>

</body>
</html>
