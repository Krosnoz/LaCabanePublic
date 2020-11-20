<?php get_header('second'); ?>

<main class="blockThematic">
  <section class="thematicGallery">
    <?php if( have_rows('une_oeuvre') ): ?>
      <?php while( have_rows('une_oeuvre') ): the_row(); ?>
        <?php $image = get_sub_field('image_oeuvre'); if( !empty( $image ) ): ?>
          <div class="oneItem glightbox" data-glightbox="description: .custom-desc">
            <div class="oneImage">
              <span class="oneText"><?php the_sub_field('nom_oeuvre'); ?></span>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
            <div class="glightbox-desc custom-desc">
              <h1 class="custom-title"><?php the_sub_field('nom_oeuvre'); ?>, <span><?php the_sub_field('annee_oeuvre'); ?></span></h1>
              <p class="custom-tech"><?php the_sub_field('description_technique_oeuvre'); ?></p>
              <p class="custom-text"><?php the_sub_field('description_oeuvre'); ?></p>
              <span class="custom-price"><?php the_sub_field('prix_oeuvre'); ?> €</span>
            </div>
          </div>
        <?php endif; ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </section>
</main>
<?php get_footer(); ?>
