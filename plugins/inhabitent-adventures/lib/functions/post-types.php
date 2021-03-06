<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type
function inhabitent_cpt_adventure() {

	$labels = array(
		'name'                  => _x( 'Latests Adventures', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Adventure', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Adventure', 'text_domain' ),
		'name_admin_bar'        => __( 'Adventures Type', 'text_domain' ),
		'archives'              => __( 'Adventure Archives', 'text_domain' ),
		'attributes'            => __( 'Adventure Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Adventures', 'text_domain' ),
		'add_new_item'          => __( 'Add New Adventure', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Adventure', 'text_domain' ),
		'edit_item'             => __( 'Edit Adventure', 'text_domain' ),
		'update_item'           => __( 'Update Adventure', 'text_domain' ),
		'view_item'             => __( 'View Adventure', 'text_domain' ),
		'view_items'            => __( 'View Adventures', 'text_domain' ),
		'search_items'          => __( 'Search Adventure', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featuredimag e', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into product', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this product', 'text_domain' ),
		'items_list'            => __( 'Adventures list', 'text_domain' ),
		'items_list_navigation' => __( 'Adventures list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter products list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Shop', 'text_domain' ),
		'description'           => __( 'Adventures for the adventures section', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'author', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'template'              => array(
            array('core/paragraph', array(
                'placeholder'   => 'Add Adventure description...'
            )),
        ),
        'template_lock'         => true,
		'show_in_rest'          => true,
	);
	register_post_type( 'adventures', $args );

}
add_action( 'init', 'inhabitent_cpt_adventure', 0 );
