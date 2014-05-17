<html>
	<head>
		<title>Testing Recipes</title>
		<meta charset="utf-8">
	</head>
	<body>
		<form action="recipes.php" method="post">
			<label for="title">Title
				<input type="text" name="title">
			</label>
			<label for="servings"># of servings
				<input type="number" name="servings">
			</label>
			<label for="preptime">Prep Time (in minutes)
				<input type="number" name="preptime">
			</label>
			<label for="cooktime">Cook Time (in minutes)
				<input type="number" name="cooktime">
			</label>
			<label for="ingredients">Ingredients
				<input type="text" name="ingredients">
			</label>
			<label for="directions">Directions
				<textarea name="directions"></textarea>
			</label>
			<input type="submit">
		</form>
	</body>
</html>