<?php

	// Prompt user for a starting number

	fwrite(STDOUT, "Please choose a starting number\n");
	$starting_number = trim(fgets(STDIN));

	// Prompt user for an ending number

	fwrite(STDOUT, "Please choose an ending number\n");
	$ending_number = trim(fgets(STDIN));

	// Prompt user to select an increment

	fwrite(STDOUT, "Please choose a numerical increment\n");
	$increment = trim(fgets(STDIN));

	// If user does not input a value for increment, default to a value of 1

	if (intval($increment)) {
		$increment;
	} else {
		$increment = 1;
	}

	// Display all numbers between the starting and ending numbers user selected via a for loop

	for ($i = $starting_number; $i <= $ending_number; $i += $increment) {
		echo "$i\n";
	}

	// Give an error message if passed arguments are not numeric












?>