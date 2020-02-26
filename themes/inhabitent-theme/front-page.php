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

			<h1 class='front-page-section-title'>Shop Stuff</h1>

			<h1 class='front-page-section-title'>Inhabitent Journal</h1>

			<div class='inhabitent-journal-post-cards-container'>
				<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
					
					<div class='inhabitent-journal-post-cards'>
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="post-thumbnail-img">
								<?php the_post_thumbnail(); ?>
							</div> 
						<?php endif; ?>
						<div class="journal-post-wrapper">
							<p><?php echo get_the_date() . ' / ' . get_comments_number() . ' Comments'?></p>
							<h2><?php the_title() ?></h2>
							<button class='journal-btn'>Read Entry</button>
						</div>
					</div>

				<?php endforeach; wp_reset_postdata(); ?>     
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
