<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package WebionLite
 */
?>

<?php do_action( 'webionlite-theme/widget-area/render', 'footer-area' ); ?>

<div <?php webionlite_footer_class(); ?>>
	<div class="space-between-content"><?php
		webionlite_footer_copyright();
		webionlite_social_list( 'footer' );
	?></div>
</div><!-- .container -->
