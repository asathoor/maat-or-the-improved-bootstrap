<!DOCTYPE html>

<html <?php language_attributes(); ?> >

<head>
	<title><?php echo get_bloginfo('name') . ": " . get_bloginfo('description'); ?> </title>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="generator" content="Bluefish 2.2.5" >

	<!-- The MAAT WordPress Theme by Per Thykjaer Jensen, 2015 -->

	<!-- seo -->
	<meta name="author" content="Per Thykjær Jensen" >
	<meta name="date" content="2016-05-29T19:22:50+0200" >
	<meta name="copyright" content="GPLv3">
	<meta name="keywords" content="WordPress, Linux, Tutorials, Research">
	<meta name="description" content="
		<?php echo get_bloginfo('name') . ": " . get_bloginfo('description'); ?>
		">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">

	<!-- scale bootstrap to device size -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Bootstrap and Jquery -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/bower_components/bootstrap/dist/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	
 	<!-- jquery (must load before the Bootstrap js. -->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/bower_components/jquery/dist/jquery.min.js"></script>

	<!-- Latest compiled and minified Bootstrap JavaScript -->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
	<!-- wp_head -->
	<?php wp_head(); ?>
	<!-- /wp_head -->

</head>
<body>
	<header>
		<section>
			<a href="<?php echo get_bloginfo('url'); ?>">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/maat_100x.png" alt="Logo: <?php echo get_bloginfo('name'); ?>" id="logoImg">
			</a>
			<a href="<?php echo get_bloginfo('url'); ?>">
				<h1 id="logo"> <?php echo get_bloginfo('name'); ?> </h1>
				<h2> <?php echo get_bloginfo('description'); ?> </h2>
			</a>
		</section>
	</header>

<?php include_once "menu.php"; ?>

<!-- /header.php -->
