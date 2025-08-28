<?php 

// 1. NUMBER SEQUENCE DISPLAY
// Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line.
// There will be no hyphen(-) at starting and ending position.


$numbers = '';

for($i = 1; $i <= 10; $i++) {
	$numbers .= $i;
	$numbers .= ($i !== 10) ? "-" : "";
}

var_dump($numbers);


// OUTPUT:
// 1-2-3-4-5-6-7-8-9-10