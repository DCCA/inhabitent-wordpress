<?php

/**
 * The template file for home.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area home-content-area">
	<main id="main" class="site-main" role="main">

		<?php if (have_posts()) : ?>

			<?php if (is_home() && !is_front_page()) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while (have_posts()) : the_post(); ?>
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
						<?php the_excerpt(); ?>
					</div><!-- .entry-content -->
					<a href='<?php echo get_post_permalink();?>' class="inhabitant-line-btn">Read More</a>
				</article><!-- #post-## -->

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part('template-parts/content', 'none'); ?>

		<?php endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>