<?php get_header('second'); ?>

<main class="blockThematic">
  <section class="thematicGallery">
    <?php if (have_rows('une_oeuvre')) : $counter = 1; ?>
      <?php while (have_rows('une_oeuvre')) : the_row(); ?>
        <?php $image = get_sub_field('image_oeuvre');
        if (!empty($image)) : ?>

          <div class="oneItem glightbox" data-glightbox='<?php echo "description: .custom-desc" . $counter; ?>'>
            <div class="oneImage">
              <span class="oneText"><?php the_sub_field('nom_oeuvre'); ?></span>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
            <div class='<?php echo "glightbox-desc .custom-desc" . $counter; ?>'>
              <div class="flexLight">
                <div class="leftInfo">
                  <h1 class="custom-title"><?php the_sub_field('nom_oeuvre'); ?>, <span><?php the_sub_field('annee_oeuvre'); ?></span></h1>
                  <p class="custom-tech"><?php the_sub_field('description_technique_oeuvre'); ?></p>
                  <p class="custom-text"><?php the_sub_field('description_oeuvre'); ?></p>
                  <span class="custom-price"><?php the_sub_field('prix_oeuvre'); ?> €</span>
                </div>
                <div class="rightPic">
                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </div>
              </div>
            </div>
          </div>

        <?php endif; ?>
      <?php $counter++;
      endwhile; ?>
    <?php endif; ?>
  </section>
</main>
<?php get_footer(); ?>