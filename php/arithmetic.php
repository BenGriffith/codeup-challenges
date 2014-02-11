<?php

	function error($a, $b) {
		echo "ERROR: Arguments must be numbers and greater than 0 instead of {$a} or {$b}\n";
	}

	function add($a, $b) {
		// Adding $a to $b
		if (is_numeric($a) && is_numeric($b)) {
			echo $a + $b;
			echo "\n";
		} else {
			error($a, $b);
		}
	}

 	add('test', 4);

	function subtract($a, $b) {
		// Subtracting $b from $a
		if (is_numeric($a) && is_numeric($b)) {
			echo $a - $b;
			echo "\n";
		} else {
			error($a, $b); 
		}
	}

	subtract(10, 2);

	function multiply($a, $b) {
		// Multiplying $a and $b
		if (is_numeric($a) && is_numeric($b)) {
			echo $a * $b;
			echo "\n";
		} else {
			error($a, $b);
		}
	}

	multiply(10, 10);

	function divide($a, $b) {
		// Dividing $a by $b
		if (is_numeric($a) && is_numeric($b)) {
			echo $a / $b;
			echo "\n";
		} else {
			error($a, $b);
		}

		if ($b == 0) {
			error($a, $b);
		}
	}

	divide(10, 10);

	function modulus($a, $b) {
		// Modulus of $a and $b
		if (is_numeric($a) && is_numeric($b)) {
			echo $a % 2;
			echo "\n";
			echo $b % 2;
			echo "\n";
		} else {
			error($a, $b);
		}
	}

	modulus(10, 10);

?>