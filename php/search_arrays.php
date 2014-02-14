<?php

	// first names
	$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

	$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

	$tina = 'Tina';

	$bob = 'Bob';

	// function returning TRUE or FALSE if an array value is found
	function array_value($input, $names) {
		if (in_array($input, $names) == TRUE) {
			return 'TRUE' . PHP_EOL;
		} else {
			return 'FALSE' . PHP_EOL;
		}
	}

	// calling function array_value
	echo array_value($tina, $names);
	echo array_value($bob, $names);
?>