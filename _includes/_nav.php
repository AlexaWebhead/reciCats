<nav>
	<ul class="wrapper">
		<li><a href="/" <?php if($section == 'home') { echo 'class="active"'; } ?> >Home</a></li>
		<li><a href="ingredient_search.php" <?php if($section == 'search') { echo 'class="active"'; } ?> >Search</a></li>
		<li><a href="view_recipes.php" <?php if($section == 'view') { echo 'class="active"'; } ?> >View Recipes</a></li>
		<li><a href="add_recipe.php" <?php if($section == 'add') { echo 'class="active"'; } ?> >Add Recipes</a></li>
	</ul>
</nav>