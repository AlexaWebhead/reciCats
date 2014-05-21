<?php
	$section = 'search';
	$pageTitle = 'Search by Ingredients';
	$pageDesc = 'Add 2 or more ingredients to your search, to find compatible recipes.';
?>

<?php include '_includes/_doc-head.php'; ?>
		<?php include '_includes/_header.php'; ?>
		<?php include '_includes/_nav.php'; ?>
		<main>
			<div class="wrapper">
				<h2 class="page-title">Search by Ingredients</h2>
				<p class="subhead">Add 2 or more ingredients to your search to find a recipe that includes what's in your cupboard!</p>
				<aside>
					<p>Hints:</p>
					<ul>
						<li><p>You must search for at least 2 ingredients.</p></li>
						<li><p>The more ingredients you search for, the larger chance you'll end up with a more precise recipe.</p></li>
					</ul>
				</aside>
				<form class="search" action="ingredients.php" method="post">
					<label for="ingredients">Ingredients
						<input type="search" name="ingredients">
					</label>
					<input type="submit">
				</form>
			</div>
		</main>
		<?php include '_includes/_footer.php'; ?>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	</body>
</html>