<?php
/**
 * The template for displaying all single products.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class('single-product-card'); ?>>
                <div class="single-product-img-wrapper" style='background-image: url(<?php echo get_field('product_image');?>)'>
                </div>
                <div class="single-product-info">
                    <header class="entry-header">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'large' ); ?>
                        <?php endif; ?>
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    </header><!-- .entry-header -->
                    <div class="entry-content">
                        <p class='single-product-price'> <?php echo '$ ' . number_format(get_post_meta( get_the_ID(), 'price', true ), 2); ?> </p>
                        <?php the_content(); ?>
                        <?php
                            wp_link_pages( array(
                                'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
                                'after'  => '</div>',
                            ) );
                        ?>
                    </div><!-- .entry-content -->
                    <div class='single-product-social-media'>
                        <a href='#'><i class="fab fa-facebook-f"></i> Like</a>
                        <a href='#'><i class="fab fa-twitter"></i> Twitter</a>
                        <a href='#'><i class="fab fa-pinterest"></i> Pin</a>
                    </div>
                </div>
            </article><!-- #post-## -->

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
