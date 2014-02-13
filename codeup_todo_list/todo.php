<?php

	// Create array to hold list of todo items
	$items = array();

	// List array items formatted for CLI
	function list_items($list) {
		$index = '';
		// Return string of list items separated by newlines.
		// Should be listed [KEY] Value like this:
		// [1] TODO item 1
		// [2] TODO item 2 - blah
		// DO NOT USE ECHO, USE RETURN
		foreach ($list as $key => $item) {
			$new_key = $key + 1;
			$index .= "[". $new_key . "]" . " TODO " . $item . "\n";
		}
		return $index;
	}

	// Get STDIN, strip whitespace and newlines,
	// and convert to uppercase if $upper is true
	function get_input($upper = FALSE) {
		if ($upper) {
			// Return filtered STDIN input
			return strtoupper(trim(fgets(STDIN)));
		} else {
			return trim(fgets(STDIN));
		}
	}

	// Add a (S)ort option to your menu. When it is chosen, it should
	// call a function called sort_menu()
	function sort_menu($input) {
		{

		}
	}

	// The loop
	
	do {
		// Echo the list produced by the function
		echo list_items($items);

		// Show the menu options
		echo '(N)ew item, (R)emove item, (S)ort item, (Q)uit : ';

		// Get the input from the user
		// Use trim() to remove whitespace and newlines
		$input = get_input(TRUE);

		// Check for actionable input
		if ($input == 'N') {
			// Ask for entry
			echo 'Enter item: ';
			// Add entry to list array
			$items[] = get_input();
		} elseif ($input == 'R') {
			// Remove which item?
			echo 'Enter the item number to remove: ';
			// Get array key
			$key = get_input();

			// Decrease value of $key by 1
			$key--;

			// Remove from array
			unset($items[$key]);
		} elseif ($input == 'S') {
			// Call sort_menu() function
			sort_menu();
		}

	// Exit when input is (Q)uit
	} while ($input != 'Q');

	// Say Goodbye!
	echo "Goodbye!\n";

	// Exit with 0 errors
	exit(0);

?>