<?php 

/* Template Name: PA Directory */

get_header(); ?>


<div id="internal_trigger" class="internal_main">
	
	<div class="grey_topog"><?php echo file_get_contents("wp-content/themes/fang/images/topog.svg"); ?></div><!-- grey_topog -->
	
	<div class="container one_col">
		
		<h1 class="internal_title centered"><?php the_title();?></h1><!-- internal_title -->
		
		<div class="pa_wrapper">
		
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'pa_menu' ) ); ?>
		
		</div><!-- pa_wrapper -->
				
	</div><!-- container -->
	
</div><!-- internal_main -->


<?php get_footer(); ?>
