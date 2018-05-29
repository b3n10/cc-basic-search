<?php

// require db connection
require_once 'db/connect.php';

if (isset($_GET['txt_search'])) {

	$search_text = $db->escape_string($_GET['txt_search']);

	// LIKE to use wildcard searching e.g. %textsearch%
	$query = $db->query("
		SELECT title
		FROM posts
		WHERE
			body LIKE '%{$search_text}%'
		OR
			text LIKE '%{$search_text}%'
	");

}
