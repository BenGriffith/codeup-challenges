<?php

	function error_message($a, $b) {
		echo "ERROR: Arguments must be numbers and greater than 0 instead of {$a} or {$b}\n";
	}

	function add($a, $b) {
		// Adding $a to $b
		if (is_numeric($a) && is_numeric($b)) {
			return $a + $b;
		} else {
			error_message($a, $b);
		}
	}


	function subtract($a, $b) {
		// Subtracting $b from $a
		if (is_numeric($a) && is_numeric($b)) {
			return $a - $b;
		} else {
			error_message($a, $b); 
		}
	}


	function multiply($a, $b) {
		// Multiplying $a and $b
		if (is_numeric($a) && is_numeric($b)) {
			return $a * $b;
		} else {
			error_message($a, $b);
		}
	}


	function divide($a, $b) {
		// Dividing $a by $b
		if (is_numeric($a) && is_numeric($b)) {
			return $a / $b;
			if ($b == 0) {
				error_message($a, $b);
			}
		}
	}


	function modulus($a, $b) {
		// Modulus of $a and $b
		if (is_numeric($a) && is_numeric($b)) {
			return $a % 2;
			return $b % 2;
		} else {
			error_message($a, $b);
		}
	}

 	$addition = add(3, 4);
	$subtraction = subtract(10, 2);
	$multiplication = multiply(10, 10);
	$division = divide(10, 0);
	$mod = modulus(10, 10);

	echo $addition . "\n";
	echo $subtraction . "\n";
	echo $multiplication . "\n";
	echo $division . "\n";
	echo $mod . "\n";

?>