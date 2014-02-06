<?php

	fwrite(STDOUT, "What is a number you would like to start with that is less than 10?\n");

	$starting_number = fgets(STDIN);

	fwrite(STDOUT, "What is a number you would like to end with that is greater than 50?\n");

	$ending_number = fgets(STDIN);

	fwrite(STDOUT, "Would you like to count by 1, 2, 4, 6, 8, or 10?\n");

	$increment = fgets(STDIN);

	for ($i = $starting_number; $i <= $ending_number; $i += $increment) {
		fwrite(STDOUT, "/$i is equal to $i\n");
	}

?>