<?php

const CONSTANT_NAME = "Another case-sensitive constant";
echo CONSTANT_NAME."\n";  // Outputs: Another case-sensitive constant
define("CONSTANT_NAME", "This is a case-insensitive constant", true);

// Accessing the constant (both cases will work)
echo CONSTANT_NAME;   // Outputs: This is a case-insensitive constant
//echo constant_name;   // Outputs: This is a case-insensitive constant (if you uncomment it the error will come)
const FRUITS = ['apple', 'banana', 'cherry'];
echo "\n".FRUITS[0]."\n";  // Outputs: apple
define('FRUITS1', ['apple', 'banana', 'cherry']);
echo FRUITS1[1]."\n";  // Outputs: apple
// Global Scope: Using const to define a scalar and array constant
const GLOBAL_CONST = "This is a global constant";
const GLOBAL_ARRAY_CONST = ['apple', 'banana', 'cherry'];

// Function that uses constants
function useGlobalConst() {
    // Accessing global constants inside the function
    echo GLOBAL_CONST . "\n";  // Outputs: This is a global constant
    echo GLOBAL_ARRAY_CONST[1] . "\n";  // Outputs: banana
}

// Function that defines a constant using define()
function defineLocalConstant() {
    // Using define() to create a scalar constant
    define("LOCAL_CONST", "This is a local constant");
    
    // Using define() to create an array constant
    define("LOCAL_ARRAY_CONST", ['dog', 'cat', 'mouse']);
}

// Function that accesses constants defined by define()
function useDefinedConstants() {
    echo LOCAL_CONST . "\n";  // Outputs: This is a local constant
    echo LOCAL_ARRAY_CONST[2] . "\n";  // Outputs: mouse
}

// Calling the function to use the global constants
useGlobalConst();

// Calling the function to define constants using define()
defineLocalConstant();

// Calling the function to use the constants defined by define()
useDefinedConstants();

?>