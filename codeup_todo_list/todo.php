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
		if ($upper == TRUE) {
			// Return filtered STDIN input
			return strtoupper(trim(fgets(STDIN)));
		} else {
			return trim(fgets(STDIN));
		}
	}

	// sort_menu function sorts $items array
	function sort_menu($user_sort, $items) {
		if ($user_sort == 'A') {
			asort($items);
		} elseif ($user_sort == 'Z') {
			arsort($items);
		} elseif ($user_sort == 'O') {
			ksort($items);
		} elseif ($user_sort == 'R') {
			krsort($items);
		} 
		return $items;
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

			// Add entry to $index
			$index = get_input();

			// Ask user if they want to add item to the beginning
			// or end of the list
			echo 'Would you like to add this item to the (B)eginning or (E)nd of the list? ';
			$location = get_input(TRUE);

			if ($location == 'B') {
				// add item to beginning of $items array
				array_unshift($items, $index);
			} elseif ($location == 'E') {
				// add item to end of $items array
				array_push($items, $index);
			} else {
				// default is to add item to beginnig of $items array
				array_push($items, $index);
			}

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
			// Ask user to select an option
			echo 'How would you like to sort your tasks? (A)-Z, (Z)-A, (O)rder entered, (R)everse order entered? ';
			
			// User inputs selection
			$user_sort = get_input(TRUE);

			// Call sort_menu() function ordering the TODO list 
			$items = sort_menu($user_sort, $items);

		} elseif ($input == 'F') {
			// remove item from beginning of $items array
			array_shift($items);

		} elseif ($input == 'L') {
			// remove item from end of $items array
			array_pop($items);
		}

	// Exit when input is (Q)uit
	} while ($input != 'Q');

	// Say Goodbye!
	echo "Goodbye!\n";

	// Exit with 0 errors
	exit(0);

?>