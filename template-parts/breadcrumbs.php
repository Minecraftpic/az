<?php
/**
 * Template part for breadcrumbs.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WebionLite
 */

$breadcrumbs_visibillity = webionlite_theme()->customizer->get_value( 'breadcrumbs_visibillity' );

/**
 * [$breadcrumbs_visibillity description]
 * @var [type]
 */
$breadcrumbs_visibillity = apply_filters( 'webionlite-theme/breadcrumbs/breadcrumbs-visibillity', $breadcrumbs_visibillity );

if ( ! $breadcrumbs_visibillity ) {
	return;
}

$breadcrumbs_front_visibillity = webionlite_theme()->customizer->get_value( 'breadcrumbs_front_visibillity' );

if ( !$breadcrumbs_front_visibillity && is_front_page() ) {
	return;
}

do_action( 'webionlite-theme/breadcrumbs/breadcrumbs-before-render' );

?><div <?php echo webionlite_get_container_classes( 'site-breadcrumbs' ); ?>>
	<div <?php webionlite_breadcrumbs_class(); ?>>
		<?php do_action( 'webionlite-theme/breadcrumbs/before' ); ?>
		<?php do_action( 'cx_breadcrumbs/render' ); ?>
		<?php do_action( 'webionlite-theme/breadcrumbs/after' ); ?>
	</div>
</div><?php

do_action( 'webionlite-theme/breadcrumbs/breadcrumbs-after-render' );
