<?php
// Register Custom Post Type
function latest_post_type() {

	$labels = array(
		'name'                  => _x( 'latests', 'Post Type General Name', 'psd2wp' ),
		'singular_name'         => _x( 'latest', 'Post Type Singular Name', 'psd2wp' ),
		'menu_name'             => __( 'latest', 'psd2wp' ),
		'name_admin_bar'        => __( 'latest', 'psd2wp' ),
		'archives'              => __( 'latest Archives', 'psd2wp' ),
		'attributes'            => __( 'latest Attributes', 'psd2wp' ),
		'parent_item_colon'     => __( 'Parent latest:', 'psd2wp' ),
		'all_items'             => __( 'All latest', 'psd2wp' ),
		'add_new_item'          => __( 'Add New latest', 'psd2wp' ),
		'add_new'               => __( 'Add New', 'psd2wp' ),
		'new_item'              => __( 'New Item', 'psd2wp' ),
		'edit_item'             => __( 'Edit Item', 'psd2wp' ),
		'update_item'           => __( 'Update latest', 'psd2wp' ),
		'view_item'             => __( 'View latest', 'psd2wp' ),
		'view_items'            => __( 'View latest', 'psd2wp' ),
		'search_items'          => __( 'Search latest', 'psd2wp' ),
		'not_found'             => __( 'Not found', 'psd2wp' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'psd2wp' ),
		'featured_image'        => __( 'Featured Image', 'psd2wp' ),
		'set_featured_image'    => __( 'Set featured image', 'psd2wp' ),
		'remove_featured_image' => __( 'Remove featured image', 'psd2wp' ),
		'use_featured_image'    => __( 'Use as featured image', 'psd2wp' ),
		'insert_into_item'      => __( 'Insert into latest', 'psd2wp' ),
		'uploaded_to_this_item' => __( 'Uploaded to this latest', 'psd2wp' ),
		'items_list'            => __( 'latest list', 'psd2wp' ),
		'items_list_navigation' => __( 'latest list navigation', 'psd2wp' ),
		'filter_items_list'     => __( 'Filter latest list', 'psd2wp' ),
	);
	$args = array(
		'label'                 => __( 'latest', 'psd2wp' ),
		'description'           => __( 'Post Type Description', 'psd2wp' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
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
	);
	register_post_type( 'latest', $args );

}
add_action( 'init', 'latest_post_type', 0 );