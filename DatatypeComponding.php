<?php
$color =["red","green","blue"]; //array indexed array
$car =["toyota"=>25, "ford"=> 28]; //array associative array
class Car {
    public $make;
    public $model;

    public function __construct($make, $model) {
        $this->make = $make; // value of the make set
        $this->model = $model;// value of the model set
    }

    public function drive() {
        echo "The $this->make $this->model is driving."; // echo make and model
    }
}// object data type 

$myCar = new Car("Toyota", "Corolla");  // Automatically sets make and model
$myCar->drive();  // Output: The Toyota Corolla is driving.
var_dump($myCar);  
var_dump($color);
var_dump($car);
?>