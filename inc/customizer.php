<?php
/**
 * psd2wp Theme Customizer
 *
 * @package psd2wp
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function psd2wp_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'psd2wp_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'psd2wp_customize_partial_blogdescription',
		) );
	}

/**
 * psd2wp customizer
 */

	$wp_customize->add_panel('psd2wp_settings', array(
		'title'=> __('psd2wp settings'),
		'description'=>'',
		'priority'=> 10,
	));

	$wp_customize->add_section('psd2wp_colors', array(
		'title'=> ('colors'),
		'panel'=>'psd2wp_settings',
	));

	$wp_customize->add_setting('psd2wp_body_bg_color', array(
		'type'=> 'theme_mod',
		'capability'=> 'edit_theme_options',
		'default'=> '#fff',
		'transport'=> 'refresh',
		'sanitize_callback'=> 'sanitize_hex_color',
	));

	$wp_customize->add_control('psd2wp__body_bg_color', array(
		'label'=> __('body background'),
		'type'=>'color',
		'section'=> 'psd2wp_colors',
	));



}
add_action( 'customize_register', 'psd2wp_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function psd2wp_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function psd2wp_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function psd2wp_customize_preview_js() {
	wp_enqueue_script( 'psd2wp-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'psd2wp_customize_preview_js' );


