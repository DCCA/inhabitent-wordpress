<?php
/**
 * The template for displaying the front page.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- <img src="<?php echo get_template_directory_uri() . '/assets/logos/inhabitent-logo-full.svg' ?>" alt="" class="inhabitent-logo-front-page"> -->
			
			<?php  while ( have_posts() ) : the_post(); ?>

				<?php  get_template_part( 'template-parts/content', 'page' ); ?>

			<?php  endwhile; // End of the loop. ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
