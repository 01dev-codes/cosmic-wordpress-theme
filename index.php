<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

get_header();
?>

<?php if ( is_active_sidebar( 'carousel_home' ) ) {
	dynamic_sidebar( 'carousel_home' );
} ?>

<aside class="shopping-info">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-4">
				<p><i class="fa fa-shipping-fast"></i> Frete <strong>grátis</strong> a partir de <strong>R$250</strong></p>
			</div>
			<div class="col-12 col-md-4">
				<p><i class="fa fa-credit-card"></i> Até <strong>12x</strong> no cartão</p>
			</div>
			<div class="col-12 col-md-4">
				<p><i class="fa fa-lock"></i> Compra <strong>100%</strong> segura</p>
			</div>
		</div>
	</div>
</aside>

	<?php if ( is_active_sidebar( 'grid_home' ) ) {
		dynamic_sidebar( 'grid_home' );
	} ?>

<?php get_footer(); ?>