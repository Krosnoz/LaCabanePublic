<?php get_header(); ?>

<main class="mainContact">
  <section class="containerContact">
    <h3>CONTACT</h3>
    <div class="bgContact">
      <div class="leftContact">
        <h1>ME CONTACTER</h1>
        <p>Pour toute information sur mes oeuvres et mon travail.</p>
        <div class="rsContact">
          <span><i class="fas fa-phone-alt"></i>06 77 65 97 77</span>
          <span><i class="fas fa-at"></i></i>contact@francois-piranda.art</span>
          <span><i class="fab fa-instagram"></i>@instagram</span>
          <span><i class="fab fa-vimeo"></i>@vimeo</span>
          <span><i class="fab fa-pinterest"></i>@pinterest</span>
        </div>
      </div>
      <div class="rightContact">
        <div class="flex-column">
          <label for="name">Nom</label>
          <input type="text" name="name" id="name">
        </div>
        <div class="flex-column">
          <label for="firstname">Prénom</label>
          <input type="text" name="firstname" id="firstname">
        </div>
        <div class="flex-column">
          <label for="email">Email</label>
          <input type="email" name="email" id="email">
        </div>
        <div class="flex-column">
          <label for="phone">Téléphone</label>
          <input type="text" name="phone" id="phone">
        </div>
        <div class="flex-column" style="width: 100%; padding-bottom: 0;">
          <label for="objet">Message</label>
          <textarea name="objet" rows="10" cols="30"></textarea>
        </div>
        <p>En envoyant ce message, vous consentez à la collecte et au traitement des données renseignées ci-dessus pour l’usage exclusif. En savoir plus</p>
        <input class="sendContact" type="submit" value="Envoyer">
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
