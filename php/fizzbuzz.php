<?php

	for ($i = 1; $i < 101; $i += 1) {
		if ($i % 3 == 0 && $i % 5 == 0) {
			echo "FizzBuzz\n";
		} else {
				if ($i % 3 == 0) {
					echo "Fizz\n";
			} elseif ($i % 5 == 0) {
					echo "Buzz\n";
			} else {
				echo "$i\n";
			}
		}	
	}

?>