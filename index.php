<?php
	$section = "home";
	$pageTitle = 'Friendly Recipe Box';
	$pageDesc = 'View recipes, and search by 2 or more ingredients to find a recipe to whip up.';
?>

<?php include '_includes/_doc-head.php'; ?>
		<?php include '_includes/_header.php'; ?>
		<?php include '_includes/_nav.php'; ?>
		<main>
			<div class="wrapper">
				<h2 class="page-title">Recent Recipes</h2>
				<ul>
					<li>
						<h3><a href="#">Title</a></h3>
						<p>Nullam quis risus eget urna mollis ornare vel eu leo. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
					</li>
				</ul>
			</div>
		</main>
		<?php include '_includes/_footer.php'; ?>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	</body>
</html>