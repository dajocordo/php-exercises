<?php 

// 3. CHECK FOR 30 OR SUM IS 30
// Write a PHP program to check two given integers, and 
// return true if one of them is 30 or if their sum is 30.


function checkFor30($num1, $num2) {
    if ($num1 == 30 || $num2 == 30) {
        return true;
    }
    if ($num1 + $num2 == 30) {
        return true;
    }
    return false;
}

var_dump(checkFor30(30, 20));


// OUTPUT:
// true