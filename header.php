<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package psd2wp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<script type="text/javascript">
		jQuery(document).ready(function(){
		  jQuery('#slider').slippry()
		});
	</script>
		
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'psd2wp' ); ?></a>

	<header id="masthead" class="site-header container-fluid">
		<div class="row">
				<div class="site-branding  col-sm-3">
					<?php the_custom_logo() ?>					
					<?php
					if (!has_custom_logo()) {
					?>			
					    <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php the_title(); ?>" />				
					<?php
					}
					?>
									
				</div><!-- .site-branding -->
				<div class="site-menu  col-sm-9">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</div>
		</div><!-- #site-navigation -->
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
