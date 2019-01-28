<?php
/**
 * The template for displaying all pages
 *Template Name: Homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package psd2wp
 */

get_header();
?>

	<div id="primary" class="content-area">
		<div class="home-slider row ml-0 mr-0">
			<div class="home-page-slider container-fluid"style="
							    padding-left: 0px;
							    padding-right: 0px;

							">
				<ul id="slider">
					<?php

							$slider_args= array(
								'post_type' => 'slider',

								'posts_per_page' => 4
							);
							// The Query
							$the_slider = new WP_Query( $slider_args );

							if( $the_slider->have_posts()) :

							
							while( $the_slider->have_posts()) :  $the_slider->the_post(); 
									$thumb_id = get_post_thumbnail_id();
									$thumb_url = wp_get_attachment_image_src($thumb_id, 'full', true);
								?>
								<li>
								    <a href="<?php the_permalink() ?>">
								    	<img src="<?php echo $thumb_url[0] ?>" alt="<?php the_title() ?> <p> <?php the_excerpt();?></p>">
								    </a>
								</li>

							<?php
							endwhile;
								wp_reset_postdata();
							endif;					
						?>					
				  
				  
				</ul>
			</div>
			
				
														
				 		
		</div><!-- #home slider -->

		<div class=" post-content container-fluid" style="
					    padding-left: 0px;
					    padding-right: 0px;
					" >
			<div class="row ml-0 mr-0">
				<div class="latest-pages  ">

					<div class="child">
						<div class="post-page">
							<?php 
								  $args = array(
								  'child_of' => $post->ID,
								  'post_type' => 'page',
								  'post_status' => 'publish',
								  'sort_column' => 'menu_order' 
								   ); 
								  $pages = get_pages($args);  ?>
								  <ul> 
								  <?php foreach( $pages as $page ) { ?>
								   <li>
								  <a href="<?php echo  get_permalink($page->ID); ?>" rel="bookmark" title="<?php echo $page->post_title; ?>">
								  <span class="title1"><?php echo $page->post_title; ?></span>
								  </a>
								  </li>
								  <?php } ?>
								  </ul>
						</div>
					</div>
				</div>	<!-- #home child pages -->


				<div class="sidebar row ml-0 mr-0">
					
					 	<?php

							$args= array(
								'post_type' => 'latest',
								'status' => 'published',
								'posts_per_page' => '3',
							);
							// The Query
							$the_query = new WP_Query( $args );


							// The Loop
							while( $the_query->have_posts()) :  $the_query->the_post(); ?>
								<div class=" side-post col-4">
									<div class="side-post-thumbnail">
							        		<?php the_post_thumbnail();?>
							        </div>
									<div class="side-post-title">
							        		<?php the_title();?>
							        </div>
									<div class="side-post-description">
							        		<?php the_excerpt();?>
							        </div>
						        </div>
							<?php
								wp_reset_postdata();
							endwhile;							
						?>					
				</div><!-- #sidebar posts -->

			</div>
		</div><!-- #child page and posts section -->



		


		
		

	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
