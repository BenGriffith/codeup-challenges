<?php

	// Game picks a random number

	$randomNumber = mt_rand(1, 100);
	
	// Prompts user to guess the number

	fwrite(STDOUT, "Please guess a number\n");

	$userGuess = fgets(STDIN);
	
	// Variable used to count how many times user guessed the correct number

	$numberOfGuesses = 0;

	// If user guess is less than random number, output "HIGHER". If
	// user guess is greater than random number, output "LOWER". If 
	// user guess is equal to random number, output is "GOOD GUESS!"

	while ($userGuess != $randomNumber) {

		// Incrementing the guess count by one
		$numberOfGuesses++;

		if ($userGuess < $randomNumber) {
			echo "Please guess HIGHER!\n";
		} elseif ($userGuess > $randomNumber) {
			echo "Please guess LOWER!\n";
		}

		$userGuess = fgets(STDIN);
	}

	// Congratulating user on guessing the correct number

	fwrite(STDOUT, "Congratulations! You guessed the correct number in $numberOfGuesses attempts!\n");
?>