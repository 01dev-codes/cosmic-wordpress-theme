<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	<footer id="colophon" class="main-footer">
		<h2 class="name"><?php echo get_bloginfo('name'); ?></h2>
		<p class="details">
			© 2020 Todos os direitos reservados.<br />
			CNPJ: 00.400.667/0001-81<br />
			Porto Alegre, RS
		</p>
		<?php get_template_part( 'template-parts/social-media' ); ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
