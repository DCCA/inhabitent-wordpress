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
		background-position: center;
		background-size: contain;
		width: auto;
	}
	</style>';
}
add_action('login_header', 'inhabitent_starter_set_logo');

// Change the URL from the logo
function inhabitent_starter_set_url_logo(){
	return get_home_url();
}
add_filter('login_headerurl','inhabitent_starter_set_url_logo');
