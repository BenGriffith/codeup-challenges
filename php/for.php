<?php

	// Prompt user for a starting number

	fwrite(STDOUT, "Please choose a starting number\n");
	$starting_number = trim(fgets(STDIN));

	// Prompt user for an ending number

	fwrite(STDOUT, "Please choose an ending number\n");
	$ending_number = trim(fgets(STDIN));

	// Display all numbers between the starting and ending numbers user selected via a for loop

	for ($i = $starting_number; $i <= $ending_number; $i++) {
		echo "$i\n";
	}

	// Prompt user to select an increment


	// Default increment to 1 if no input


	// Give an error message if passed arguments are not numeric












?>