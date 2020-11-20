<?php get_header(); ?>

<main class="mainOeuvres">
  <section class="containerThematics">
    <h3>THÉMATIQUES</h3>
    <?php if( have_rows('thematique') ): $counter = 1; ?>
      <?php while( have_rows('thematique') ): the_row(); ?>
        <?php if($counter % 2 == 0): ?>
          <div class="oneThematic right">
            <div class="informationsThematic">
              <h2><?php the_sub_field('titre_thematique'); ?></h2>
              <p><?php the_sub_field('description_thematique');?></p>
              <a href="<?php the_sub_field('lien_thematique');?>">Découvrir les œuvres</a>
            </div>
            <div class="imageThematic">
              <div class="bgThematic"></div>
              <?php
              $image = get_sub_field('image_thematique');
              if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            <span class="keyThematic"><?php the_sub_field('mot_cle_thematique'); ?></span>
          </div>
        </div>
      <?php else : ?>
        <div class="oneThematic left">
          <div class="imageThematic">
            <div class="bgThematic"></div>
            <?php
            $image = get_sub_field('image_thematique');
            if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
          <span class="keyThematic"><?php the_sub_field('mot_cle_thematique'); ?></span>
        </div>
        <div class="informationsThematic">
          <h2><?php the_sub_field('titre_thematique'); ?></h2>
          <p><?php the_sub_field('description_thematique');?></p>
          <a href="<?php the_sub_field('lien_thematique');?>">Découvrir les œuvres</a>
        </div>
      </div>
    <?php endif;?>
    <?php $counter++; endwhile; ?>
  <?php endif; ?>
</section>
</main>

<?php get_footer(); ?>
