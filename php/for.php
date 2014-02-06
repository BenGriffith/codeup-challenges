<?php

	fwrite(STDOUT, "What is a number you would like to start with that is less than 10?\n");

	$starting_number = fgets(STDIN);

	fwrite(STDOUT, "What is a number you would like to end with that is greater than 50?\n");

	$ending_number = fgets(STDIN);

	fwrite(STDOUT, "What number would you like to count by? 2, 4, 5, 6, 19, your favorite number, you choose.\n");

	$increment = fgets(STDIN);

	if ($increment > 0) {
		for ($i = $starting_number; $i <= $ending_number; $i += $increment) {
		fwrite(STDOUT, "/$i is equal to $i\n");
		}
	} else {
		for ($i = $starting_number; $i <= $ending_number; $i += 1) {
		fwrite(STDOUT, "/$i is equal to $i\n");
		}
	}

?>