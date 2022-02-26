<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebionLite
 */

?>

<header class="entry-header">
	<?php the_title( '<h1 class="entry-title h2-style">', '</h1>' ); ?>
	<div class="entry-meta">
		<?php
			webionlite_posted_by();
			webionlite_posted_in( array(
				'prefix'  => __( 'In', 'webionlite' ),
			) );
			webionlite_posted_on( array(
				'prefix'  => __( 'Posted', 'webionlite' ),
			) );
			webionlite_post_comments( array(
				'postfix' => __( 'Comment(s)', 'webionlite' ),
			) );
		?>
	</div><!-- .entry-meta -->
</header><!-- .entry-header -->

<?php webionlite_post_thumbnail( 'webionlite-thumb-l', array( 'link' => false ) ); ?>