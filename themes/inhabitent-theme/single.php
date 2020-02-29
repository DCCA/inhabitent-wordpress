<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area home-content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('journal-posts'); ?>>
					<header class="entry-header home-post-header" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
						<a href="<?php echo get_post_permalink();?>" class='journal-image-link'></a>
						<?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
						<?php if ('post' === get_post_type()) : ?>
							<div class="entry-meta">
								<?php inhabitent_starter_posted_on(); ?> / <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?> / <?php inhabitent_starter_posted_by(); ?>
							</div><!-- .entry-meta -->
						<?php endif; ?>
					</header><!-- .entry-header -->
					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->
				
				<div class='single-product-social-media'>
					<a href='#'><i class="fab fa-facebook-f"></i> Like</a>
					<a href='#'><i class="fab fa-twitter"></i> Twitter</a>
					<a href='#'><i class="fab fa-pinterest"></i> Pin</a>
				</div>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
