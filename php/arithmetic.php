<?php

	function add($a, $b) {
		// Adding $a to $b
		if (is_numeric($a) && is_numeric($b)) {
			echo $a + $b;
			echo "\n";
		} else {
			echo "ERROR: Both arguments must be numbers\n";
		}
	}

	add(3, 'test');

	function subtract($a, $b) {
		// Subtracting $b from $a
		if (is_numeric($a) && is_numeric($b)) {
			echo $a - $b;
			echo "\n";
		} else {
			echo "ERROR: Both arguments must be numbers\n";
		}
	}

	subtract(10, true);

	function multiply($a, $b) {
		// Multiplying $a and $b
		if (is_numeric($a) && is_numeric($b)) {
			echo $a * $b;
			echo "\n";
		} else {
			echo "ERROR: Both arguments must be numbers\n";
		}
	}

	multiply(array(5, 5, 'test'), 10);

	function divide($a, $b) {
		// Dividing $a by $b
		if (is_numeric($a) && is_numeric($b)) {
			echo $a / $b;
			echo "\n";
		} else {
			echo "ERROR: Both arguments must be numbers\n";
		}
	}

	divide('test', 4);

	function modulus($a, $b) {
		// Modulus of $a and $b
		if (is_numeric($a) && is_numeric($b)) {
			echo $a % 2;
			echo "\n";
			echo $b % 2;
			echo "\n";
		} else {
			echo "ERROR: Both arguments must be numbers\n";
		}
	}

	modulus('test', 20);

?>