<?php
/**
 * The template for displaying the front page.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
			<?php
				$args = array( 
					'post_type'      => 'post', 
					'posts_per_page'  => 3,
				);
				$journal_posts = get_posts( $args ); // returns an array of posts
			
			?>

			<div class='inhabitent-journal-post-cards-container'>
				<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
					
					<div class='inhabitent-journal-post-cards'>
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'medium' ); ?>
						<?php endif; ?>
						<p><?php echo get_the_date() . ' / ' . get_comments_number() . ' Comments'?></p>
						<h1><?php the_title() ?></h1>
					</div>

				<?php endforeach; wp_reset_postdata(); ?>     
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
