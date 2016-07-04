	<?php
	$mysqli = new mysqli("localhost", "farrpoint", "edinburgh", "mapping");
		if ($mysqli->connect_errno) {
			echo "Failed to connect: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		};
		$mysqli->set_charset("utf8");
	?>