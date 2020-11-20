<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Pour Yoast qui va placer le Google Tag Manager -->
	<?php wp_body_open(); ?>
	<header class="headerSecond">

		<a href="http://localhost/wordpress/"><img class="logoHeader" src="<?php bloginfo('template_directory') ?>/img/monogramme_bleu.png'" alt="Monogramme" width="70" height="72" /></a>
		<span class="mobileHeader"><i class="fas fa-bars"></i></span>
		<!-- Permet de récuperer un widget menu, déclarer dans functions.php -->
		<?php wp_nav_menu(array('theme_location' => 'menu-principal')); ?>
		<!-- Permet de récuperer un widget menu, déclarer dans functions.php -->
		<?php wp_nav_menu(array('theme_location' => 'menu-reseaux')); ?>

		<h1 class="headerText"><?php the_title(); ?></h1>
	</header>
