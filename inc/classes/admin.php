<?php


if ( ! class_exists( 'WebionLite_Admin_Notice' ) ) {

	/**
	 * Class WebionLite_Admin_Notice
	 */
	class WebionLite_Admin_Notice {

		/**
		 * A reference to an instance of this class.
		 *
		 * @since 1.0.0
		 * @var   object
		 */
		private static $instance;

		/**
		 * WebionLite_Admin_Notice constructor.
		 */
		public function __construct() {

			add_action( 'admin_notices',  array( $this, 'webionlite_premium_notice' ), 1 );
			add_action( 'admin_head',     array( $this, 'webionlite_premium_notice_styles' ) );
			add_action( 'admin_menu',     array( $this, 'webionlite_update_to_pro_appearance_menu_item' ) );

		}

		/**
		 * Display upgrade notice
		 *
		 * @since 1.0.0
		 * @return void
		 */
		public function webionlite_premium_notice() {
			$id = 'webionlite_premium_notice';
			$class = 'notice';
			$message = __( 'Check out <a href="https://www.templatemonster.com/wordpress-themes/webion-a-minimalist-wordpress-theme-68092.html" target="_blank">Webion</a>! Get more features, widgets and 24/7 support.', 'webionlite' );

			printf( '<div id="%1$s" class="%2$s"><p>%3$s</p></div>', $id, $class, $message );
		}

		/**
		 * Output premium notice styles
		 *
		 *
		 * @since 1.0.0
		 * @return void
		 */
		public function webionlite_premium_notice_styles() {
			?>
			<style type="text/css">
				#webionlite_premium_notice {
					color: #23282d;
					border: 1px solid #74a739;
					border-radius: 3px;
					background-color: #f0f8e2;
					box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
				}
				#webionlite_premium_notice.notice p {
					margin: 1em 0;
					font-size: 16px;
				}
				#webionlite-update-to-pro-wrapper {
					max-width: 962px;
				}
				#webionlite-update-to-pro-wrapper p {
					margin: 2em 0;
				}
				.webionlite-btns-wrapper {
					max-width: 962px;
					text-align: center;
				}
				.webionlite-btn {
					margin: 0 10px;
					padding: 0 45px;
					display: inline-block;
					height: 60px;
					font-size: 14px;
					line-height: 60px;
					color: #fff;
					border-radius: 3px;
					text-decoration: none;
					text-align: center;
					outline: none;
					background: #000;
				}
				.webionlite-btn:hover, .webionlite-btn:focus {
					color: #fff;
				}
				.webionlite-btn:before {
					vertical-align: top;
					margin-right: 8px;
					font-family: 'dashicons';
					font-size: 20px;
				}
				.webionlite-btn.webionlite-btn-view {
					background: #309df4;
					background: linear-gradient(to bottom,#42a5f5 0,#2196f3 100%);
				}
				.webionlite-btn.webionlite-btn-view:before {
					content: "\f504";
				}
				.webionlite-btn.webionlite-btn-view:hover {
					background: #1b7bd8;
					background: linear-gradient(to bottom,#2196f3 0,#1976d2 100%);
				}
				.webionlite-btn.webionlite-btn-to-pro {
					background: #74a739;
					background: linear-gradient(to bottom,#83bd40 0,#6a9e2e 100%);
				}
				.webionlite-btn.webionlite-btn-to-pro:before {
					content: "\f174";
				}
				.webionlite-btn.webionlite-btn-to-pro:hover {
					background: #65972b;
					background: linear-gradient(to bottom,#72a536 0,#588821 100%);
				}
			</style>
			<?php
		}

		/**
		 * Add Theme Update menu item
		 *
		 * @since 1.0.0
		 * @return void
		 */
		public function webionlite_update_to_pro_appearance_menu_item() {
			add_theme_page( 'Update to Pro', 'Update to Pro', 'edit_theme_options', 'webionlite_lite-update-to-pro', array( $this, 'webionlite_update_to_pro_callback' ) );
		}

		/**
		 * WebionLite Premium notice callback function
		 *
		 * @since 1.0.0
		 * @return void
		 */
		public function webionlite_update_to_pro_callback() {
			?>
			<div class="wrap">
				<h2>Update to Full version</h2>
				<div id="webionlite-update-to-pro-wrapper">
					<img src="<?php echo esc_url( get_theme_file_uri( '/assets/admin/webionlite-premium.jpg' ) ) ?>">
					<p><strong>WebionLite Pro</strong> - great theme for personal blog. Give your blog more power with premium tools like extended set of widgets, multiple headers, footers and Live Customizer options. The theme is available under GPL2 license and comes with 24/7 support.</p>
					<div class="webionlite-btns-wrapper">
						<a href="/#" class="webionlite-btn webionlite-btn-view" target="_blank">WebionLite Free Demo</a>
						<a href="/#" class="webionlite-btn webionlite-btn-to-pro" target="_blank">WebionLite Free</a>
					</div>
				</div><!-- mnt-options -->
			</div><!-- wrap -->
			<?php
		}

		/**
		 * Returns the instance.
		 *
		 * @since  1.0.0
		 * @return object
		 */
		public static function get_instance() {

			// If the single instance hasn't been set, set it now.
			if ( null == self::$instance ) {
				self::$instance = new self;
			}

			return self::$instance;

		}

	}
}

/**
 * Return WebionLite Admin Notice class object
 *
 * @since 1.0.0
 * @return object
 */
function webionlite_admin_notice() {

	return WebionLite_Admin_Notice::get_instance();

}

if ( is_admin() ) {

	webionlite_admin_notice();

}

