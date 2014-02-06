<?php

	// Random number declared

	$number = mt_rand(1, 100);

	// Program prompts the user to guess the random number

	fwrite(STDOUT, "Guess the number! ");


	// Program gets input from the user

	$guess = fgets(STDIN);

	$number_of_guesses = 1;

	while ($guess != $number) {
		
		$number_of_guesses+=1;

		if ($guess < $number) {
			fwrite(STDOUT, "Higher\n");
		} elseif ($guess > $number) {
			fwrite(STDOUT, "Lower\n");
		}

		fwrite(STDOUT, "Guess? ");
		
		$guess = fgets(STDIN);
	}

	if ($guess = $number) {
		fwrite(STDOUT, "Good guess!\n");
	}

	fwrite(STDOUT, "It took you $number_of_guesses attempts to guess correctly!\n");

exit(0);

?>