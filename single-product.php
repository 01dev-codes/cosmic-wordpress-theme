<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _s
 */

get_header();
?>
<aside class="page-breadcrumb">
    <div class="container">
   		<h2 class="title"><?php the_title(); ?></h2>
    	<?php woocommerce_breadcrumb(); ?>
    </div>
</aside>

	<main id="primary" class="site-main container">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
