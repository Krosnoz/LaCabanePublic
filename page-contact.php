<?php get_header(); ?>

<main class="mainContact">
  <section class="containerContact">
    <h3>CONTACT</h3>
    <div class="bgContact">
      <div class="leftContact">
        <h1>ME CONTACTER</h1>
        <p>Pour toute information sur mes oeuvres et mon travail.</p>
        <div class="rsContact">
          <?php if (have_rows('champ_contact')) : ?>
            <?php while (have_rows('champ_contact')) : the_row(); ?>
              <?php echo "<span>" . get_sub_field('icon_contact') . get_sub_field('texte_contact') . "</span>"; ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="rightContact">
        <?php echo do_shortcode('[contact-form-7 id="282" title="Contact"]'); ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>