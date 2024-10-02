<?php
                        //AnoymousFunction as a Callback Function
// Array of numbers
$numbers = [1, 2, 3, 4, 5];

// Using an anonymous function as a callback in array_map
$squaredNumbers = array_map(function($num) {
    return $num * $num;
}, $numbers);

// Print the squared numbers
print_r($squaredNumbers);
//Anonymous Function with Use Keyword
// Outer variable
$factor = 3;

                // Anonymous function capturing the outer variable using `use`
$multiply = function($number) use ($factor) {
    return $number * $factor;
};

// Call the anonymous function
echo "\n".$multiply(5);  // Output: 15
//Returning Anonymous Functions from Functions
function getMultiplier($factor) {
    return function($number) use ($factor) {
        return $number * $factor;
    };
}

// Get a multiplier function
$multiplier = getMultiplier(5);

// Call the returned anonymous function
echo "\n".$multiplier(4);  // Output: 20
                //Anonymous Function in Object-Oriented Programming
class MathOperation {
    public function operate($operation, $a, $b) {
        // Call the anonymous function (operation) passed as an argument
        return $operation($a, $b);
    }
}

// Create an instance of MathOperation
$math = new MathOperation();

// Define an anonymous function for addition
$add = function($a, $b) {
    return $a + $b;
};

// Call the method with the anonymous function
echo "\n".$math->operate($add, 5, 10);  // Output: 15
                    //Anonymous Function in Object-Oriented Programming
class MathOperation1 {
    public function operate($operation, $a, $b) {
        // Call the anonymous function (operation) passed as an argument
        return $operation($a, $b);
    }
}

// Create an instance of MathOperation
$math = new MathOperation1();

// Define an anonymous function for addition
$add = function($a, $b) {
    return $a + $b;
};

// Call the method with the anonymous function
echo "\n".$math->operate($add, 5, 10);  // Output: 15
                        //Anonymous Function as an Object Method
class Person {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
}

// Create an object of the Person class
$person = new Person("John");

// Define an anonymous function and bind it to the $person object
$sayHello = Closure::bind(function() {
    echo "\nHello, my name is " . $this->name;
}, $person);

// Call the bound anonymous function
$sayHello();  // Output: Hello, my name is John

?>
