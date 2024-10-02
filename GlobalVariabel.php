<?php
    $x =6;// global variable    
    $y = 3;// global variable
    $sub = 0;
    function sum(){ // function
        global $x, $y;//global variable
        echo "This is a global variables : ".$x+$y; // echo function 
    }
    function sub(){
        $GLOBALS['sub'] = $GLOBALS['x'] - $GLOBALS['y'];//with thos the global array variable insert the  vale into the $sub 
    }
    echo sum();   //function Sum calling
    sub(); // function sub calling
    echo "\n This is Global Array Example : ".$sub; // value for the global array
?>