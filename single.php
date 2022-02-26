<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WebionLite
 */

get_header();

	do_action( 'webionlite-theme/site/site-content-before', 'single' ); ?>

	<div <?php webionlite_content_class() ?>>
		<div class="row">

			<?php do_action( 'webionlite-theme/site/primary-before', 'single' ); ?>

			<div id="primary" <?php webionlite_primary_content_class(); ?>>

				<?php do_action( 'webionlite-theme/site/main-before', 'single' ); ?>

				<main id="main" class="site-main"><?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content-post' );

					endwhile; // End of the loop.
				?></main><!-- #main -->

				<?php do_action( 'webionlite-theme/site/main-after', 'single' ); ?>

			</div><!-- #primary -->

			<?php do_action( 'webionlite-theme/site/primary-after', 'single' ); ?>

			<?php get_sidebar(); // Loads the sidebar.php template.  ?>
		</div>
	</div>

	<?php do_action( 'webionlite-theme/site/site-content-after', 'single' );

get_footer();
