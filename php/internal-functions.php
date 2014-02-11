<?php

	$nothing = '';
	$something = '';
	$array = array(1, 2, 3);

	// Create a function that checks if a variable is set or empty,
	// and display "$variable_name is SET|EMPTY"

	function check_variable($a) {
		if (isset($a) || empty($a)) {
			return "\$a is SET|EMPTY" . PHP_EOL;
		}
	}

	echo check_variable($something);	

	// TEST: If var $nothing is set, display 'nothing is SET'

	function nothing_set($a) {
		if (isset($a)) {
			return "nothing is SET" . PHP_EOL;
		}
	}

	echo nothing_set($nothing);

	// TEST: If var $nothing is empty, display 'nothing is EMPTY'



	// TEST: if var $something is set, display '$something is SET'



	// Serialize the array $array, and output the results



	// Unserialize the array $array, and output the results



?>