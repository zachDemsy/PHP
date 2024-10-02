<?php
// Namespace must be declared first, before any other code
namespace MyNamespace;

// Now you can use magic constants and any other PHP code
echo "__NAMESPACE__: " . __NAMESPACE__ . "\n";  // Outputs: MyNamespace

// Defining a function inside the namespace
function myFunction() {
    echo "__FUNCTION__: " . __FUNCTION__ . "\n";  // Outputs the function name
    echo "__LINE__: " . __LINE__ . "\n";          // Line number within the function
}

// Calling the function inside the namespace
myFunction();

// Defining a class inside the namespace
class MyClass {
    public function myMethod() {
        echo "__CLASS__: " . __CLASS__ . "\n";    // Outputs the class name
        echo "__METHOD__: " . __METHOD__ . "\n";  // Outputs the class and method name
        echo "__LINE__: " . __LINE__ . "\n";      // Line number inside the method
    }
}

// Creating an instance of the class and calling the method
$obj = new MyClass();
$obj->myMethod();
?>