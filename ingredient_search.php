<?php
	$section = "search";
	$pageTitle = "Search by Ingredients";
	$pageDesc = "Add 2 or more ingredients to your search, to find compatible recipes.";
?>

<?php include '_includes/_doc-head.php'; ?>
		<?php include '_includes/_header.php'; ?>
		<?php include '_includes/_nav.php'; ?>
		<main>
			<div class="wrapper">
				<h2 class="page-title">Search by Ingredients</h2>
				<p class="subhead">Add 2 or more ingredients to your search to find a recipe that includes what's in your cupboard. Separate ingredients by typing enter, or separating them with a comma. Happy hunting!</p>
				<aside>
					<p>Hints:</p>
					<ul class="square">
						<li><p>You should search for at least 2 ingredients.</p></li>
						<li><p>The more ingredients you search for, the larger chance you'll end up with a more precise recipe.</p></li>
					</ul>
				</aside>
				<form class="search" action="ingredients.php" method="post">
					<label for="ingredients">Ingredients
						<div data-tags-input-name="ingredient" data-pre-tags-separator="\n" id="ingredient-search"></div>
					</label>
					<input type="submit" value="Let's do this">
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
				$("#ingredient-search").tagging( my_custom_options );
			})
		</script>
	</body>
</html>