<?php

	// Random number declared

	$number = rand(1, 100);

	// Program prompts the user to guess the random number

	fwrite(STDOUT, "Guess the number! ");


	// Program gets input from the user

	$guess = fgets(STDIN);

	while ($guess != $number) {
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

exit(0);


?>