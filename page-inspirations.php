<?php get_header(); ?>

<main class="mainInspirations">
  <section class="lastArtists">
    <h3>ARTISTES</h3>
    <p class="thanksArtists">Merci Auguste Forestier, Pierre Avezard, Emile Ratier, Francis Marshall, créateurs dans l’ombre, tous les anonymes connectés, “ artistes premiers ”, d’océanie, afrique, amériques, celtes… Merci Cy Twombly, Jean-Michel Basquiat, Joseph Cornell, Rebecca Horn, Christian Boltanski, Sophie Calle, Annette messager, Bill Viola, Gina Pane, Valie Export et tous·tes les autres dont le travaille m’interpelle.</p>
    <?php if( have_rows('champs_dartiste') ): $counter = 1; $secondCounter = 0; ?>
      <div class="containerArtist">
        <?php while( have_rows('champs_dartiste') ): the_row(); ?>
          <div class="oneArtist">
            <div class="imageArtist">
              <?php
              $image = get_sub_field('image_dillustration');
              if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <div class="maskArtist"></div>
            <?php endif; ?>
            <span class="nameArtist"><?php the_sub_field('nom_de_lartiste'); ?></span>
          </div>
          <div class="informationsArtist">
            <span><?php the_sub_field('nom_de_lillustration'); ?></span>
            <p><?php the_sub_field('description_de_lillustration');?></p>
          </div>
        </div>
        <?php if( ($counter % 3 == 0) &&  have_rows('champs_de_texte_personnalise')): ?>
          <?php
          $rows = get_field('champs_de_texte_personnalise' );
          $row = current(array_filter($rows[$secondCounter]));

          if (is_array($row)): ?>
          <div class="specialTextImage">
            <img src="<?php echo esc_url($row['url']); ?>" alt="<?php echo esc_attr($row['alt']); ?>" />
          </div>
        <?php else : ?>
          <div class="specialText">
            <p><?php echo $row; ?></p>
          </div>
        <?php endif; $secondCounter++; ?>
      <?php endif; ?>
      <?php $counter++; endwhile; ?>
    </div>
  <?php endif; ?>
</section>
</main>

<?php get_footer(); ?>
