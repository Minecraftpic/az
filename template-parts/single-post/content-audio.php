<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebionLite
 */

?>

<?php do_action( 'webionlite_extra_post_format_audio' ); ?>

<div class="entry-content">
	<?php the_content(); ?>
	<?php wp_link_pages( array(
		'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'webionlite' ),
		'after'       => '</div>',
		'link_before' => '<span>',
		'link_after'  => '</span>',
	) ); ?>
</div><!-- .entry-content -->
