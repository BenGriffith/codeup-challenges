<?php

	

	function add($a, $b) {
		// Adding $a to $b 
		echo $a + $b;
		echo "\n";
	}

	function subtract($a, $b) {
		// Subtracting $b from $a
		echo $a - $b;
		echo "\n";
	}

	function multiply($a, $b) {
		// Multiplying $a and $b
		echo $a * $b;
		echo "\n";
	}

	function divide($a, $b) {
		// Dividing $a by $b
		echo $a / $b;
		echo "\n";
	}

	add(4, 4);
	subtract(10, 5);
	multiply(5, 5);
	divide(102, 5);

	function modulus($a, $b) {
		// Modulus of $a
		echo $a % 2;
		echo "\n";

		// Modulus of $b
		echo $b % 2;
		echo "\n";
	}

	modulus(22, 100);

?>