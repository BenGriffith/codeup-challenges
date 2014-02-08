<?php

	// Setting the minimum and maximum values from arguments passed via CLI

	$min = $argv[1];
	$max = $argv[2];

	// If argument count is not equal to 3 or $min or $max are not numerals, the user
	// cannot continue

	if ($argc != 3 || !(is_numeric($min)) || !(is_numeric($max))) {
		echo "Ooops! Let's try input again!\n";
		exit(0);
		}

	// If $min is greater than $max the user cannot continue

	if ($min > $max) {
		echo "Ooops! Your first input should be less than your second input!\n";
		exit(0);
	}

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