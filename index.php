
<!DOCTYPE html>
<html ng-app="app">
<head>
    <base href="<?php $url_info = parse_url( home_url() ); echo trailingslashit( $url_info['path'] ); ?>">
    <title>AngularJS Basic Theme Name</title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
		<h1>
			<a href="<?php echo site_url(); ?>">AngularJS Demo Theme</a>
		</h1>
	</header>

	<div ng-view></div>

	<footer>
		&copy; <?php echo date( 'Y' ); ?>
	</footer>

</body>

</html>
