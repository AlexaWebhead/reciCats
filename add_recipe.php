<?php
	$section = 'add';
	$pageTitle = 'Add a Recipe';
	$pageDesc = 'Add one of your favorite recipes to the site, so you can find it later!';
?>

<?php include '_includes/_doc-head.php'; ?>
		<?php include '_includes/_header.php'; ?>
		<?php include '_includes/_nav.php'; ?>
		<main>
			<div class="wrapper">
				<h2 class="page-title">Add a Recipe</h2>
				<aside>
					<p>Hints:</p>
					<ul>
						<li><p>Title has a 100 character limit.</p></li>
						<li><p>Include your favorite ingredient in the recipe title.</p></li>
					</ul>
				</aside>
				<form class="add" action="recipes.php" method="post">
					<input type="text" name="title" required>
					<label for="title" alt="Recipe Title" placeholder="Title"></label>
					
					<label class="inline" for="servings">
						<input type="number" name="servings" min="1" max="99" required>
						# of servings
					</label>

					<label class="inline" for="preptime">
						<input type="number" name="preptime" min="1" max="999" required>
						Prep Time (in minutes)
					</label>

					<label class="inline" for="cooktime">
						<input type="number" name="cooktime" min="1" max="999" required>
						Cook Time (in minutes)
					</label>

					<input type="text" name="categories" required>
					<label for="categories" alt="Categories" placeholder="Categories"></label>

					<input type="text" name="ingredients" required>
					<label for="ingredients" alt="Ingredients" placeholder="Ingredients"></label>

					<label for="directions" alt="Directions" placeholder="Directions"></label>
						<textarea name="directions" required>Write directions here.</textarea>

					<input type="submit">
				</form>
			</div>
		</main>
		<?php include '_includes/_footer.php'; ?>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	</body>
</html>