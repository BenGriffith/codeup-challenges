<?php

	// create a function alphabet_soup($string) that accepts a string
	// and will return the string in alphabetical order
	function alphabet_soup($string) {

	}
	
	// ask user for a string input
	echo "Please enter one or multiple words you would like to sort in alphabetical order?" . PHP_EOL;

	// user enters in an input of string(s)
	$user_input = fgets(STDIN);

	// convert words string 1, string 2, string 3, etc. into an array. array elements are individual words, not individual characters.
	$string_to_array = explode(' ', $user_input);

	// break down words in the $string_to_array array into an array of individual characters
	foreach ($string_to_array as $value) {
		var_dump($value);

		// $breakdown_array = str_split($value);
		// var_dump($breakdown_array);
		
		// $array_to_string = implode('', $breakdown_array);
		// print_r($breakdown_array);


	}

	// call alphabet_soup($string) function

	// string word remains in tact, but is sorted alphabetically

	// string accepted by program

	// string sorted alphabetically

	

?>