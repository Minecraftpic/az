<?php
/**
 * Template part for default Header layout.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WebionLite
 */
?>

<?php get_template_part( 'template-parts/top-panel' ); ?>

<div <?php webionlite_header_class(); ?>>
	<?php do_action( 'webionlite-theme/header/before' ); ?>
	<div class="space-between-content">
		<div <?php webionlite_site_branding_class(); ?>>
			<?php webionlite_header_logo(); ?>
		</div>
		<?php webionlite_main_menu(); ?>
	</div>
	<?php do_action( 'webionlite-theme/header/after' ); ?>
</div>


