<?php 

// 1. SUM TRIPLE IF SAME
// Write a PHP program to compute the sum of the two given integer values.
// If the two values are the same, then returns triple their sum.


function sumValues($val1, $val2) {
	$sumar = $val1 + $val2;
	if ($val1 === $val2) {
		return $sumar * 3;
	}
	return $sumar;
}

var_dump(sumValues(4,4));


// OUTPUT:
// 24