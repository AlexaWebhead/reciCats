<?php
	$section = "add";
	$pageTitle = "Add a Recipe";
	$pageDesc = "Add one of your favorite recipes to the site, so you can find it later!";
?>

<?php include '_includes/_doc-head.php'; ?>
		<?php include '_includes/_header.php'; ?>
		<?php include '_includes/_nav.php'; ?>
		<main>
			<div class="wrapper">
				<h2 class="page-title">Add a Recipe</h2>
				<aside>
					<p>Hints:</p>
					<ul class="square">
						<li><p>Title has a 100 character limit.</p></li>
						<li><p>Include your favorite ingredient in the recipe title.</p></li>
					</ul>
				</aside>
				<form class="add" action="recipes.php" method="post">
					<input type="text" name="title" required>
					<label for="title" alt="Recipe Title" placeholder="Title"></label>
					
					<fieldset>
						<legend>The little things</legend>
						<label class="inline" for="servings">
							<input type="number" name="servings" min="1" max="99" maxlength="2" required>
							# of servings
						</label>
					
						<div class="halfsies-l">
							<label class="inline" for="preptime">
								<input type="number" name="preptime" min="1" max="999" maxlength="3" required>
								Prep Time
							</label>
						</div>

						<div class="halfsies-r">
							<label class="inline" for="cooktime">
								<input type="number" name="cooktime" min="1" max="999" maxlength="3" required>
								Cook Time
							</label>
						</div>
					</fieldset>

					<label for="categories">Categories</label>
					<div data-tags-input-name="category" data-pre-tags-separator="\n" id="categories"></div>

					<label for="ingredients">Ingredients</label>
					<div data-tags-input-name="ingredient" data-pre-tags-separator="\n" id="ingredients"></div>

					<label for="directions" alt="Directions" placeholder="Directions"></label>
						<textarea name="directions" rows="20" required>Write directions here.</textarea>

					<input type="submit" value="Send in Recipe">
				</form>
			</div>
		</main>
		<?php include '_includes/_footer.php'; ?>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="/content/js/tagging.js"></script>
		<script type="text/javascript">
			$(function(){
				var my_custom_options = {
				    "tag-char": ""
				};
				$("#ingredients").tagging( my_custom_options );
				$("#categories").tagging( my_custom_options );
			})
		</script>
	</body>
</html>