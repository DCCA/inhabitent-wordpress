<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main page-default" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php if(is_page('find-us')){
					get_template_part( 'template-parts/content', 'contact' );
				} else {
					get_template_part('template-parts/content', 'page');
				}?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>

<?php get_footer(); ?>
