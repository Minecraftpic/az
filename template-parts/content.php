<?php
/**
 * Template part for displaying default posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebionLite
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-default'); ?>>

	<header class="entry-header">
		<h3 class="entry-title"><?php 
			webionlite_sticky_label();
			the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
		?></h3>
		<div class="entry-meta">
			<?php
				webionlite_posted_by();
				webionlite_posted_in( array(
					'prefix' => __( 'In', 'webionlite' ),
				) );
				webionlite_posted_on( array(
					'prefix' => __( 'Posted', 'webionlite' )
				) );
			?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php webionlite_post_thumbnail( 'webionlite-thumb-l' ); ?>

	<?php webionlite_post_excerpt(); ?>

	<footer class="entry-footer">
		<div class="entry-meta">
			<?php
				webionlite_post_tags( array(
					'prefix' => __( 'Tags:', 'webionlite' )
				) );
			?>
			<div><?php
				webionlite_post_comments( array(
					'prefix' => '<i class="fa fa-comment" aria-hidden="true"></i>',
					'class'  => 'comments-button'
				) );
				webionlite_post_link();
			?></div>
		</div>
		<?php webionlite_edit_link(); ?>
	</footer><!-- .entry-footer -->
	
</article><!-- #post-<?php the_ID(); ?> -->
