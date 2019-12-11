<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery-3.1.1.min.js"></script>
	<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/menu_mobile.js"></script>
</head>
<body>
	<div>
		<header>
			<h1><?php bloginfo('name'); ?></h1>
		</header>
		<nav id="menu">
			<img class="head" alt="" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>">

			<?php wp_nav_menu(array('theme_location' => 'Sancycle')); ?>

		</nav>

		