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

  <?php echo do_shortcode('[smartslider3 slider="2"]'); ?>

  <div class="maskHome">
    <header>
      <!-- Animation Logo -->
      <img src="<?php bloginfo('template_directory') ?>/img/monogramme.png'" alt="Monogramme" />
      <!-- Permet de récuperer un widget menu, déclarer dans functions.php -->
      <?php wp_nav_menu(array('theme_location' => 'menu-reseaux')); ?>
    </header>

    <main>
      <img class="homeText" src="<?php bloginfo('template_directory') ?>/img/text/francois_piranda.svg"/>
      <p class="lead"><?php echo get_bloginfo('description'); ?></p>
    </main>

    <footer>
      <?php wp_nav_menu(array('theme_location' => 'menu-principal')); ?>
    </footer>

  </div>

  <?php wp_footer(); ?>
</body>

</html>
