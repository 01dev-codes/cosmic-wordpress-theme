<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	    <?php _s_post_thumbnail(); ?>
	<header class="entry-header">
		<div class="entry-meta">
			<?php
			_s_posted_on();
			?>
		</div><!-- .entry-meta -->
		<?php the_title('<h2>', '</h2>'); ?>
	</header><!-- .entry-header -->


	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
