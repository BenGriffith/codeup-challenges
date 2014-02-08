<?php

	// Prompt user for a starting number

	fwrite(STDOUT, "Please choose a starting number\n");
	$starting_number = trim(fgets(STDIN));

	// Prompt user for an ending number

	fwrite(STDOUT, "Please choose an ending number\n");
	$ending_number = trim(fgets(STDIN));

	// If variables, $starting_number and $ending_number, are not numbers the an error message
	// is returned and the program exits

	if (!(is_numeric($starting_number)) || !(is_numeric($ending_number))) {
		fwrite(STDOUT, "Only numbers are accepted for starting and ending numbers\n");
		exit(0);
	} elseif ($starting_number > $ending_number) {
		fwrite(STDOUT, "Make sure your starting number is less than your ending number\n");
		exit(0);
	}

	// Prompt user to select an increment

	fwrite(STDOUT, "Please choose a numerical increment\n");
	$increment = trim(fgets(STDIN));

	// If increment is not a number an error message is returned and the program exits
	// If user does not input a value for increment, default to a value of 1

	if (!(is_numeric($increment))) {
		fwrite(STDOUT, "Only numbers are accepted for an increment\n");
		exit(0);
	} elseif (intval($increment)) {
		$increment;
	} else {
		$increment = 1;
	}

	// Display all numbers between the starting and ending numbers user selected via a for loop

	for ($i = $starting_number; $i <= $ending_number; $i += $increment) {
		echo "$i\n";
	}

?>