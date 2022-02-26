<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebionLite
 */

?>

<footer class="entry-footer">
	<div class="entry-meta"><?php
		webionlite_post_tags ( array(
			'prefix'    => __( 'Tags:', 'webionlite' ),
			'delimiter' => ''
		) );
	?></div>
</footer><!-- .entry-footer -->