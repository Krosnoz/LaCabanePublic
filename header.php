<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Pour Yoast qui va placer le Google Tag Manager -->
	<?php wp_body_open(); ?>
	<header class="headerMain" style="background-image: url(<?php $imageBanner = get_field('bannerHeader');
															if (!empty($imageBanner)) : echo esc_url($imageBanner['url']); ?><?php endif; ?>);">

		<div class="maskHeader">
			<img class="textHeader" src="<?php $imageText = get_field('textHeader');
											if (!empty($imageText)) : echo esc_url($imageText['url']); ?><?php endif; ?>" />

			<a href="https://krosnoz.fr/WP/"><img class="logoHeader" src="<?php bloginfo('template_directory') ?>/img/monogramme.png'" alt="Monogramme" width="70" height="72" /></a>
			<!-- Permet de récuperer un widget menu, déclarer dans functions.php -->
			<?php wp_nav_menu(array('theme_location' => 'menu-principal')); ?>
			<!-- Permet de récuperer un widget menu, déclarer dans functions.php -->
			<?php wp_nav_menu(array('theme_location' => 'menu-reseaux')); ?>
		</div>

		<div class="mobile maskHeader">
			<a href="https://krosnoz.fr/WP/"><img class="logoHeader" src="<?php bloginfo('template_directory') ?>/img/monogramme.png'" alt="Monogramme" width="70" height="72" /></a>
			<img class="textHeader" src="<?php $imageText = get_field('textHeader');
											if (!empty($imageText)) : echo esc_url($imageText['url']); ?><?php endif; ?>" />
			<span class="mobileHeader">
				<span></span>
				<span></span>
				<span></span>
			</span>

			<?php wp_nav_menu(array('theme_location' => 'menu-reseaux')); ?>

			<nav class="mobileMenu">
				<?php wp_nav_menu(array('theme_location' => 'menu-principal')); ?>
			</nav>
		</div>
	</header>