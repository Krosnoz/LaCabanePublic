<?php get_header(); ?>

<main class="aboutMe">
  <h3>MOI</h3>
  <div class="meContainer">
    <?php $image = get_field('image_de_profil'); if( !empty( $image ) ): ?>
      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
    <div class="meInformation">
      <h1>François Piranda</h1>
      <h2>ARTISTE</h2>
      <p><?php the_field('a_propos_de_moi'); ?></p>
      <a href="<?php bloginfo('template_directory') ?>/img/CV.pdf">Mon Parcours</a>
    </div>
  </div>

  <div class="parcours">
    <div class="before">
      <h3>AVANT</h3>
      <p><?php the_field('avant'); ?></p>
    </div>
    <div class="cesure">
      <h3>CESURE</h3>
      <p><?php the_field('cesure'); ?></p>
    </div>
    <div class="now">
      <h3>MAINTENANT</h3>
      <p><?php the_field('maintenant'); ?></p>
    </div>
  </div>

  <div class="writing">
    <h3>MES ÉCRITS</h3>
    <?php  $images = get_field('galerie_ecrits'); if( $images ): ?>
      <ul id="writingGallery">
        <?php foreach( $images as $image ): ?>
          <li data-thumb="<?php echo esc_url($image['url']); ?>" data-src="<?php echo esc_url($image['url']); ?>" data-sub-html=".gallery-info-box">
            <div class="containerWrite">
              <img src="<?php echo esc_url($image['url']); ?>"/>
              <span class="writeName"><?php echo $image['title']; ?></span>
              <div class="gallery-info-box">
                <div class="slide-caption-wrap">
                  <?php echo wpautop($image['description']); ?>
                </div>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>

    <div class="blockContact">
      <p>Envie de suivre mes actualités ? <span><a href="http://localhost/wordpress/contact/">Contactez-moi  !</a></span></p>
    </div>
  </main>

  <?php get_footer(); ?>
