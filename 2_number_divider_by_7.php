<?php

// Write a program that prints numbers lower than X which divide by 3.


$number = 5;//$argv[1];

while ($number > 0) {
    // check if $number divides by 3. % - modulo 
    if($number %3 == 0){
        var_dump($number);
        break;
    }

    // decrement $number by 1
    $number--;
    
    
}

?>
