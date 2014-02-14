<?php

	function humanized_list($string) {
		// converting $physicists_string into an array
		$physicists_array = explode(', ', $string);

		// removing last item in $physicists_array
		array_pop($physicists_array);

		// adding item to the end of $physicists_array
		array_push($physicists_array, 'and Tony Stark');

		// sort the physicists by first name
		asort($physicists_array);

		// converting $physicists_array into a string
		$implosion = implode(', ', $physicists_array);

		// return value of $implosion
		return $implosion;
	}

	// list of famous peeps
	$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';


	// converting $physicists_array to a string
	$famous_fake_physicists = humanized_list($physicists_string);

	// outputting to the screen
	echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}." . PHP_EOL;

?>