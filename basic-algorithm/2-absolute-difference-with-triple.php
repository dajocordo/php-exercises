<?php 

// 2. ABSOLUTE DIFFERENCE WITH TRIPLE
// Write a PHP program to get the absolute difference between n and 51.
// If n is greater than 51 return triple the absolute difference.


function absoluteDifference3($number) {
    $diff = abs($number - 51);
    if ($number > 51) {
        return $diff * 3;
    }
    return $diff;
}

var_dump(absoluteDifference3(56));


// OUTPUT:
// 15