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
    <a href="<?php the_permalink(); ?>" rel="bookmark">
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
		<?php
		the_excerpt(
		);

		?>

        <span class="readmore">Ler mais</span>
	</div><!-- .entry-content -->
    </a>
</article><!-- #post-<?php the_ID(); ?> -->
