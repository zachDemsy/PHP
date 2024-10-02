<?php
$x= 5; // global variables
function x(){
    $x= 5;// local variable     
    echo "IT is a local X which is in side the function ".$x; // local variable echo
} 
x(); //function calling
echo "\nIT is the a global x ".$x; // global variable echo
?>