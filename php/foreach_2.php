<?php

	$books = array(
		'The Hobbit' => array(
			'published' => 1937,
			'author' => 'J. R. R. Tolkien',
			'pages' => 310
		),
		'Game of Thrones' => array(
			'published' => 1996,
			'author' => 'George R. R. Martin',
			'pages' => 835
		),
		'The Catcher in the Rye' => array(
			'published' => 1951,
			'author' => 'J. D. Salinger',
			'pages' => 220
		),
		'A Tale of Two Cities' => array(
			'published' => 1859,
			'author' => 'Charles Dickens',
			'pages' => 544
		),
	);

	// A loop that iterates through each book and then each book's keys and values
	// Output the book's title, then list the the key value pairs for the data about each book

	foreach ($books as $key => $value) {
		
	// Update loop to only show books that were written after 1950		
		if ($value['published'] >= 1950) {
			echo "$key was published in {$value['published']}, written by {$value['author']}, and has {$value['pages']} pages!\n";
		}
	}












?>