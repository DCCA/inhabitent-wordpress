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

			<header class="page-header product-taxonomy-header">
				<h1 class="product-archive-title">
				<?php
				    echo single_term_title();
				?>
                </h1>
                <p>
                    <?php
                       echo term_description();
                    ?>
                </p>
			</header><!-- .page-header -->
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