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

<aside class="page-breadcrumb">
    <div class="container">
   		<h2 class="title"><?php the_archive_title(); ?></h2>
    	<?php woocommerce_breadcrumb(); ?>
    </div>
</aside>

<main id="primary" class="site-main container blog py-4">
    <div class="row">
        <div class="col-12 col-md-8">
        <?php if (have_posts() ) : ?>
        <?php 
        /* Start the Loop */
        while (have_posts() ) :
           the_post();

            /*
                * Include the Post-Type-specific template for the content.
                * If you want to override this in a child theme, then include a file
                * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                */
            get_template_part( 'template-parts/content', 'blog');

        endwhile;

        ?>
        <div class="pagination">
    <?php 
        echo paginate_links();
    ?>
</div>
        <?php endif; wp_reset_postdata(); ?>
        </div>
        <div class="col-12 col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>