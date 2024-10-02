<?php
$num=5;//interger
$floats=3.14;//float
$Strnum="5";//StringNumber
$inf= is_infinite(3);//infinity
$NotaNumber=acos(8);//NaN
var_dump(is_numeric($num)); // give the value of variable give in boolean   
var_dump(is_numeric($floats));// give the value of variable give in boolean 
var_dump(is_numeric($Strnum));// give the value of variable give in boolean 
var_dump(is_numeric($inf));// give the value of variable give in boolean
var_dump(is_numeric($NotaNumber));// give the value of variable give in boolean
?>