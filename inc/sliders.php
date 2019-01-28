<?php

// Register Custom Post Type
function slider() {

	$labels = array(
		'name'                  => _x( 'sliders', 'Post Type General Name', 'psd2wp' ),
		'singular_name'         => _x( 'slider', 'Post Type Singular Name', 'psd2wp' ),
		'menu_name'             => __( 'slider', 'psd2wp' ),
		'name_admin_bar'        => __( 'slider', 'psd2wp' ),
		'archives'              => __( 'slider Archives', 'psd2wp' ),
		'attributes'            => __( 'slider Attributes', 'psd2wp' ),
		'parent_item_colon'     => __( 'Parent slider:', 'psd2wp' ),
		'all_items'             => __( 'All slider', 'psd2wp' ),
		'add_new_item'          => __( 'Add New slide', 'psd2wp' ),
		'add_new'               => __( 'Add New', 'psd2wp' ),
		'new_item'              => __( 'New Item', 'psd2wp' ),
		'edit_item'             => __( 'Edit slider', 'psd2wp' ),
		'update_item'           => __( 'Update slider', 'psd2wp' ),
		'view_item'             => __( 'View slider', 'psd2wp' ),
		'view_items'            => __( 'View slider', 'psd2wp' ),
		'search_items'          => __( 'Search slider', 'psd2wp' ),
		'not_found'             => __( 'Not found', 'psd2wp' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'psd2wp' ),
		'featured_image'        => __( 'Featured Image', 'psd2wp' ),
		'set_featured_image'    => __( 'Set featured image', 'psd2wp' ),
		'remove_featured_image' => __( 'Remove featured image', 'psd2wp' ),
		'use_featured_image'    => __( 'Use as featured image', 'psd2wp' ),
		'insert_into_item'      => __( 'Insert into slider', 'psd2wp' ),
		'uploaded_to_this_item' => __( 'Uploaded to this slider', 'psd2wp' ),
		'items_list'            => __( 'slider list', 'psd2wp' ),
		'items_list_navigation' => __( 'slider list navigation', 'psd2wp' ),
		'filter_items_list'     => __( 'Filter slider list', 'psd2wp' ),
	);
	$args = array(
		'label'                 => __( 'slider', 'psd2wp' ),
		'description'           => __( 'Post Type Description', 'psd2wp' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
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
	register_post_type( 'slider', $args );

}
add_action( 'init', 'slider', 0 );