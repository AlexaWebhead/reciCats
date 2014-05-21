<?php 
	$mysqli = new mysqli("localhost", "root", "root", "reciCats", 8889);

	if ($mysqli->connect_errno) {
	    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

	<!-- check recipes for related ingredients -->
?>