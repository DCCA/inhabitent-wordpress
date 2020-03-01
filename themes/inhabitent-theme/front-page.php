<?php
/**
 * The template for displaying the front page.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<h1 class='front-page-section-title'>Shop Stuff</h1>

			<?php 
			$taxonomies = get_terms( 'product-taxonomy', array(
				'hide_empty' => true,
			) ); ?>
			<?php if ( $taxonomies ) : ?>
				<div class="products-taxonomies-front">
				<?php foreach ( $taxonomies  as $taxonomy ) : ?>
					<a href="<?php echo get_term_link($taxonomy); ?>">
					<img class='front-page-taxonomies-icons' src="<?php echo get_template_directory_uri() . '/assets/product-type-icons/' . $taxonomy->slug . '.svg'?>" alt="<?php echo $taxonomy->slug ?>"> 
					<p> 
	                   <?php echo $taxonomy->description; ?>
					</p>
					<button> <h3> <?php echo $taxonomy->name . ' stuff' ?> </h3> </button>
					</a>
				<?php endforeach; ?>
				</div>
			<?php endif;?>

		
			<h1 class='front-page-section-title'>Inhabitent Journal</h1>
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
							<div class="post-thumbnail-img" style='background-image: url(<?php echo get_the_post_thumbnail_url()?>)'>
							</div> 
						<?php endif; ?>
						<div class="journal-post-wrapper">
							<p><?php echo get_the_date() . ' / ' . get_comments_number() . ' Comments'?></p>
							<h2><a href="<?php echo get_permalink(); ?>"><?php the_title() ?></a></h2>
							<a href="<?php echo get_permalink(); ?>" class='inhabitant-line-btn'>Read More</a>
						</div>
					</div>

				<?php endforeach; wp_reset_postdata(); ?>     
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
