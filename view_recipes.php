<?php
	$section = "view";
	$pageTitle = "View Recipes";
	$pageDesc = "View the global recipe box. What's for dinner?";
?>

<?php include '_includes/_doc-head.php'; ?>
		<?php include '_includes/_header.php'; ?>
		<?php include '_includes/_nav.php'; ?>
		<main>
			<div class="wrapper">
				<h2 class="page-title">Recipe List</h2>
				<ul>
					<li class="recipe">
						<h3><a href="#">Title</a></h3>
						<p>Nullam quis risus eget urna mollis ornare vel eu leo. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
					</li>
					<li class="recipe">
						<h3><a href="#">Recipe Title</a></h3>
						<p>Nullam quis risus eget urna mollis ornare vel eu leo. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
					</li>
				</ul>
			</div>
		</main>
		<?php include '_includes/_footer.php'; ?>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	</body>
</html>