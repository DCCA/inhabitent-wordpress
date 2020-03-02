<?php

/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php if (have_posts()) : ?>

			<header class="page-header">
				<h1 class="product-archive-title">
				<?php
				the_archive_title();
				?>
				</h1>
			</header><!-- .page-header -->
			<?php 
			$taxonomies = get_terms( 'product-taxonomy', array(
				'hide_empty' => true,
			) ); ?>
			<?php if ( $taxonomies ) : ?>
				<ul class="products-taxonomies-list">
				<?php foreach ( $taxonomies  as $taxonomy ) : ?>
					<li><a href="<?php echo get_term_link($taxonomy); ?>"><?php echo $taxonomy->name ?></a></li>
				<?php endforeach; ?>
				</ul>
			<?php endif;?>
			<?php /* Start the Loop */ ?>

			<div class="product-container">
				<?php while (have_posts()) : the_post(); ?>
					<div class="product-card">
						<a href="<?php echo esc_url( get_permalink() ) ?>">
							<div class="product-img-wrapper" style='background-image: url(<?php echo get_field('product_image');?>)'>
							</div>
							<div class="product-info">
								<h3><?php the_title(); ?></h3>
								<p class="price">
									<?php echo '$ ' . get_post_meta( get_the_ID(), 'price', true ); ?>
								</p>
							</div>
						</a>
					</div>
				<?php endwhile; ?>
			</div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part('template-parts/content', 'none'); ?>

		<?php endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>