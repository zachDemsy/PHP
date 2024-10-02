<?php
    function sum (){
        $x=5; //static variable 
        $y=10;//static variable 
        $sum=$x+$y; //opration variable
        return $sum; // return the sum value
    }
    echo sum(); // calling the sum value
// echo $x; // for test only (comment undo for seen the error)
?>