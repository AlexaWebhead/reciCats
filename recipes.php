<?php 
	$mysqli = new mysqli("localhost", "root", "root", "reciCats", 8889);

	if ($mysqli->connect_errno) {
	    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

	func insertIntoRecipes(title, prepTime, cookTime, directions, servings) {
		$str = "INSERT INTO recipes (title, prepTime, cookTime, directions, servings) VALUES ";

		$str . "( " . title . ", " . prepTime . ", " . cookTime . ", " . directions . ", " . servings . ")";

		$mysqli->query($str);
	}

	insertIntoRecipes();

	func insertIntoIngredients(title) {
		$str = "INSERT INTO ingredients (title) VALUES ";

		$str . "( " . title . ")";

		$mysqli->query($str);
	}

	insertIntoIngredients();
?>