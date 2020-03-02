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

            <article id="post-<?php the_ID(); ?>" <?php post_class('single-adventure-card'); ?>>
                <div class="single-adventure-img-wrapper" style='background-image: url(<?php echo get_field('product_image');?>)'>
                </div>
                <div class="single-adventure-info">
                    <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    <h3>BY <?php echo get_the_author(); ?> </h3>
                    </header><!-- .entry-header -->
                    <div class="entry-content">
                        <?php the_content(); ?>
                        <?php
                            wp_link_pages( array(
                                'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
                                'after'  => '</div>',
                            ) );
                        ?>
                    </div><!-- .entry-content -->
                    <div class='single-adventure-social-media'>
                        <a class='inhabitant-line-btn' href='#'><i class="fab fa-facebook-f"></i> Like</a>
                        <a class='inhabitant-line-btn' href='#'><i class="fab fa-twitter"></i> Twitter</a>
                        <a class='inhabitant-line-btn' href='#'><i class="fab fa-pinterest"></i> Pin</a>
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
