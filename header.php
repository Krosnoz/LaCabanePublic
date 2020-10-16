<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>La Cabane</title>
	<link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>
<body>
	<div class="header">
		<div class="container">
			<nav id="navP" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'menu-principal' ) ); ?>
			</nav>
		</div>
	</div>
	<div class="container">
		<div class="blog-header">
			<h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
			<p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
		</div>