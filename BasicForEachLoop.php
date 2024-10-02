<?php
//for each
$car =["Toyota","Ford","BMW","Land Rover"];
foreach($car as $x){
    echo $x."\n";
}
//For each with key value
$car =["Toyota"=>"Toyota","Ford"=>"Ford","BMW"=>"BMW","Land Rover"=>"Land"];
foreach($car as $x=>$y){
    echo "$x: $y\n";
}
$numbers = [1, 2, 3, 4, 5];

// Modify the array values inside foreach
foreach ($numbers as &$num) {
    $num *= 2;  // Multiply each number by 2
}

// Print the modified array
print_r($numbers);

// Iterate over the array
foreach ($numbers as $num) {
    // Skip numbers divisible by 2
    if ($num % 2 == 0) {
        continue;
    }

    // Break the loop if the number is greater than 3
    if ($num > 3) {
        break;
    }

    echo "Number: $num\n";
}
?>