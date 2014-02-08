<?php

	// Array provided at beginning of exercise

	$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

	// foreach loop iterating through each value and outputting its type

	foreach ($things as $things_array) {
		if (is_int($things_array)) {
			echo "\$things is an integer\n";
		}

		if (is_float($things_array)) {
			echo "\$things is a float\n";
		}

		if (is_bool($things_array)) {
			echo "\$things is a boolean\n";
		}

		if (is_array($things_array)) {
			echo "\$things is an array\n";
		}

		if (is_null($things_array)) {
			echo "\$things is null\n";
		}

		if (is_string($things_array)) {
			echo "\$things is a string\n";
		}
	}

	echo "\n";

	// foreach loop iterating through value and outputs only values with a scalar type

	foreach ($things as $type_of_scalar) {
		if (is_scalar($type_of_scalar)) {
			echo "\$things is scalar\n";
		}
	}

	echo "\n";

	// Loop outputting every value of $things array

	foreach ($things as $value) {
		if (is_array($value)) {
			for ($i = 0; $i < count($value); $i++) {
				echo "{$value[$i]}\n";
			}
		} else {
			echo "$value\n";
		}
	}

?>