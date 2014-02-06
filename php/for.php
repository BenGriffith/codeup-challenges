<?php

	fwrite(STDOUT, "What is the starting number?\n");

	$starting_number = fgets(STDIN);

	fwrite(STDOUT, "What is the ending number?\n");

	$ending_number = fgets(STDIN);

	for ($i = $starting_number; $i <= $ending_number; $i += 1) {
		fwrite(STDOUT, "/$i is equal to $i\n");
	}










?>