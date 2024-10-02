<?php
//basic function of hello
    function Hello(){
        echo "Hello";
    }
    //calling the function
    Hello();
// basic function using parameters
function Welcome($name){
    echo "\nHello $name";
}
//calling the function uisng parameters
Welcome("zach");
//Function return value
function Add($a,$b){
    return $a+$b;
}
//calling the function and storing the return value in a variable
$sum = Add(5,6);
echo "\n$sum";
//Function with default parameters 
function Greet($name = "World"){
    echo "\nHello $name";
}
// calling the function with default parameters or with parameter
Greet();
Greet("zach");
// function with multiple parameters 
function mutiply($a,$b = 2){
    return $a*$b;
}
//calling function with multiple parameters 
echo "\n".mutiply(2); // The value of $a= 2 and the value of $b by defaultss its 2 , the function seen like this 2*2 returns 4
echo "\n".mutiply(2,3);// The value of $a= 2 and the value of $b is 3 , The function seen like 2*3 returns 6  
//Passing Arguments by Referece 
function change(&$x){
    $x += 10;
}
//calling Passing Argument by referce
$x = 5;
change($x);
echo "\n".$x;
//Anonymous Function 
$name=function ($Namegreet = "User"){
    return "Hello $Namegreet";
};
echo "\n".$name("ZACH");//With parameter
echo "\n".$name(); 
//More Anoymous Function Example in AnoymousFunction.php
//Recurvise Function
function factorial($n){
    if ($n == 0) {
        return 1;
        }
    return $n *factorial($n-1);
    }
echo "\n".factorial(3);
//More Recurvise Function Example in RecurviseFunction.php
//Varible lenght Argument list(...)
function sum(...$args){
    $sum = 0;
    foreach ($args as $arg) {
        $sum += $arg;
        }
    echo "\n".$sum;
}
echo sum(2,5,4,78,8,6,3,4,5);
//more Varible length Argument list Example in VariableLenghtlistFunctinArgument.php

?>
