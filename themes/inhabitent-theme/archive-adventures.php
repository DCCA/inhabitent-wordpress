<?php

/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php
			$args = array( 
				'post_type'      => 'adventures', 
				'posts_per_page'  => 4,
				'order' => 'ASC',
			);
			$adventures_posts = get_posts( $args ); // returns an array of posts
		?>

		<?php if (have_posts()) : ?>

			<header class="page-header">
				<h1 class="product-archive-title">
				<?php
				the_archive_title();
				?>
				</h1>
			</header><!-- .page-header -->
			<?php /* Start the Loop */ ?>

			<div class="adventures-container">
				<?php foreach ( $adventures_posts as $post ) : setup_postdata( $post ); ?>
					<div class="adventure-card">
						<div class='inhabitent-adventure-post-cards' style="background-image: linear-gradient(rgba(0,0,0,.2), rgba(0,0,0,.2)), url(<?php echo get_the_post_thumbnail_url()?>)">
						<div class="adventure-post-wrapper">
							<h2><a href="<?php echo get_permalink(); ?>"><?php the_title() ?></a></h2>
							<a href="<?php echo get_permalink(); ?>" class='inhabitant-line-btn'>Read More</a>
						</div>
						</div>
					</div>
				<?php endforeach; wp_reset_postdata(); ?> 
			</div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part('template-parts/content', 'none'); ?>

		<?php endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>