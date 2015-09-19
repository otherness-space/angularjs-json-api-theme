
<!DOCTYPE html>
<html  ng-app="app">
<head>
    <!-- <base href="/jsonapi/"> -->
    <title>AngularJS Basic Theme Name</title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
		<h1>
			<a href="<?php echo site_url(); ?>">AngularJS Demo Theme</a>
		</h1>
	</header>

	<div>
		<input type="text" ng-model="name">

		<p>Hello, {{name}}!</p>
	</div>

	<footer>
		&copy; <?php echo date( 'Y' ); ?>
	</footer>
</body>

</html>
