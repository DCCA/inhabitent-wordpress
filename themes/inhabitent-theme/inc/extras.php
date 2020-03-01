<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Inhabitent_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitent_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	if ( is_singular( 'page' ) ) {
		global $post;
		$classes[] = 'page-' . $post->post_name;
	}

	return $classes;
}
add_filter( 'body_class', 'inhabitent_starter_body_classes' );

// Change the logo from logging page
function inhabitent_starter_set_logo(){
	echo '
	<style>
	.login h1 a{
		background-image: url(' . get_template_directory_uri() . '/logos/inhabitent-logo-text-dark.svg);
	}
	</style>';
}
add_action('login_header', 'inhabitent_starter_set_logo');

// Change the URL from the logo
function inhabitent_starter_set_url_logo(){
	return get_home_url();
}
add_filter('login_headerurl','inhabitent_starter_set_url_logo');

// Change the logo for the header
// Add featured image to custom pages like front-page
function inhabitent_start_set_menu_logo(){
	if(is_front_page()){
		echo '
		<style>
		.site-branding .inhabitent-site-logo{
			background-image: url(' . get_template_directory_uri() . '/assets/logos/inhabitent-logo-tent-white.svg);
		}
		.main-navigation a{
			color: white;
		}
		.site-header{
			background-image: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)), url(' . get_the_post_thumbnail_url() .')
		</style>
		';
	}

	elseif(is_page('about')){
		echo '
		<style>
		.site-branding .inhabitent-site-logo{
			background-image: url(' . get_template_directory_uri() . '/assets/logos/inhabitent-logo-tent-white.svg);
		}
		.main-navigation a{
			color: white;
		}
		.site-header{
			background-image: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)), url(' . get_the_post_thumbnail_url() .');
		}
		</style>
		';
	} 

	else{
		echo '
		<style>
		.site-branding .inhabitent-site-logo{
			background-image: url(' . get_template_directory_uri() . '/assets/logos/inhabitent-logo-tent.svg);
		}
		</style>';
	};

}
add_action('wp_head', 'inhabitent_start_set_menu_logo');

// Change the footer background
function inhabitent_start_set_footer_background(){
	echo '
	<style>
	footer{
		background-image: url(' . get_template_directory_uri() . '/assets/backgrounds/dark-wood.png);
	}
	</style>
	';
}
add_action('wp_footer', 'inhabitent_start_set_footer_background');

// Add widgets in the footer area
function inhabitent_start_footer_widgets() {
	// Widget code goes here...
	register_sidebar( array(
		'name'          => 'Footer',
		'id'            => 'footer',
		'description'   => 'Widgets for the footer',
		'before_widget' => '<section class="footer-area footer-area-one">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	));
}
add_action( 'widgets_init', 'inhabitent_start_footer_widgets' );

// Filter the archive title
function inhabitent_start_remove_archive_from_title(){
	return post_type_archive_title() . ' stuff';
}
//add_filter('get_the_archive_title', 'inhabitent_start_remove_archive_from_title');

// Increase the number of pages for product archives page
function inhabitent_start_product_archives_post_per_page( $query ) {
	if ( $query->is_archive() && $query->is_main_query() && !is_admin() ) {
			$query->set( 'posts_per_page', -1 );
		}
	}
add_action( 'pre_get_posts', 'inhabitent_start_product_archives_post_per_page' );
