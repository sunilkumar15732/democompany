<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package psd2wp
 */

?>

	</div class="row"><!-- #content -->

	<footer id="colophon" class="site-footer">
	
		<div class="main-footer row ml-0 mr-0">
			<div class="upper-footer container-fluid"style="
							    padding-left: 0px;
							    padding-right: 0px;
							">
				<div class="footer-widgets row ml-0 mr-0">
					<div class="widget-1 col-sm-3"style="
							    padding-left: 0px;							    
							">
						<?php dynamic_sidebar('footer-1'); ?>
					</div>
					<div class="widget-2 col-sm-3"style="
							    padding-left: 0px;							    
							">
						<?php dynamic_sidebar('footer-2'); ?>
					</div>
					<div class="widget-3 col-sm-3"style="
							    padding-left: 0px;							    
							">
						<?php dynamic_sidebar('footer-3'); ?>
						
					</div>
					<div class="widget-4 col-sm-3"style="
							    padding-left: 0px;
							    padding-right: 0px;
							">

						<?php dynamic_sidebar('footer-4'); ?>
					</div>
				</div>
			</div>
		</div><!-- #main-footer -->



		<div class="sub-footer container-fluid"style="
						    padding-left: 0px;
						    padding-right: 0px;
						">

			<div class="row">
				<div class="foot-menu  col-sm-9" style="
								    padding-left: 0px;
								    padding-right: 0px;
								">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-2',
								'menu_id'        => 'secondary-menu',
							) );
							?>
							<div class="text-widget">
							<?php dynamic_sidebar('footer-text'); ?>
							</div>
				</div>
				<div class="foot-logo  col-3" style="
								    padding-left: 0px;
								    padding-right: 0px;
								">
							<div class="foot-logo">
							<?php dynamic_sidebar('footer-logo'); ?>
							</div>
				</div>
			</div>
		</div><!-- #sub-footer -->
		
	
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
