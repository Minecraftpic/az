<?php
/**
 * Menus configuration.
 *
 * @package WebionLite
 */

add_action( 'after_setup_theme', 'webionlite_register_menus', 5 );
function webionlite_register_menus() {

	register_nav_menus( array(
		'main'   => esc_html__( 'Main', 'webionlite' ),
		'footer' => esc_html__( 'Footer', 'webionlite' ),
		'social' => esc_html__( 'Social', 'webionlite' ),
	) );
}
