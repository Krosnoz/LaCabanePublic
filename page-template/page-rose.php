<?php

/**
 * Template Name: Rose
 * Description: Page Rose
 */

get_header(); ?>

<nav >
    <!-- Récupère le menu principal dans functions.php défini -->
	<?php wp_nav_menu(array('theme_location' => 'menu-principal')); ?>
</nav>
    
<section style="background-color:pink;">

    <!-- The Loop modifié avec style, vous pouvez la faire comme vous voulez -->
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="post">
                <h1 class="post-title"><?php the_title(); ?></h1>
                <p class="post-info">
                    Posté le <?php the_date(); ?> dans <?php the_category(', '); ?> par <?php the_author(); ?>.
                </p>
                <div class="post-content">
                    <?php the_content() ?>
                </div>
                <p><?php comments_number(); ?></p>
                <div class="post-comments">
                    <?php comments_template(); ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

</section>

<?php get_footer(); ?>