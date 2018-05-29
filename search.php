<?php

// require db connection
require_once 'db/connect.php';

if (isset($_GET['txt_search']) && !empty($_GET['txt_search'])) {

	$search_text = $db->escape_string($_GET['txt_search']);

	// LIKE to use wildcard searching e.g. %textsearch%
	$query = $db->query("
		SELECT title
		FROM posts
		WHERE
			body LIKE '%{$search_text}%'
		OR
			title LIKE '%{$search_text}%'
	");

?>
	<div class="result_count">
		Found <?php echo $query->num_rows; ?> result(s).
	</div>
<?php

	if ($query->num_rows) {

		// loop through results
		while ($result = $query->fetch_object()) {
?>
			<div class="result">
				<a href="#">
					<?php echo $result->title; ?>
				</a>
			</div>
<?php
		}
	}

} else {

	echo 'No search text input!';

}
