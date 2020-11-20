
<footer>
	<div class="footerMain">
		<div class="leftFooter">
			<i class="fas fa-bars"></i>
			<h4>MENU</h4>
			<?php wp_nav_menu(array('theme_location' => 'menu-leftFooter')); ?>
		</div>
		<div class="rightFooter">
			<i class="fas fa-info-circle"></i>
			<h4>INFORMATIONS</h4>
			<?php the_field('informations_footer'); ?>
		</div>
		<div class="newsletterFooter">
			<i class="far fa-calendar-chec"></i>
			<h4>NEWSLETTER</h4>
			<p>Pour rester au courant de mes projets !</p>
			<?php echo do_shortcode('[sibwp_form id=2]'); ?>
		</div>
	</div>
	<div class="footerSecond">
		<hr class="breakLine">
		<div class="RSFooter">
			<p>Copyright © 2020. Tous droits réservés.</p>
			<?php wp_nav_menu(array('theme_location' => 'menu-reseaux')); ?>
		</div>
		<div class="EndFooter">
			<span><a href="#">Mentions légales</a> - <a href="#">Crédits</a></p></span>
		</div>
	</div>
</footer>
<!-- Ici on pourra rajouter nos plugins JS, dont Google Analytics -->

<?php wp_footer(); ?>
</body>

</html>

<!-- Affiche le footer, a récuperer avec get_footer() -->
