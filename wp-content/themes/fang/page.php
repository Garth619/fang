<?php get_header(); ?>

<div id="internal_trigger" class="internal_main">
	
	
	<div class="internal_banner">
		
		<div class="internal_banner_inner">
		
			<img class="internal_bg" src="<?php bloginfo('template_directory');?>/images/pa_img_bg.jpg"/><!-- internal_bg -->
		
			<img class="internal_img_one" src="<?php bloginfo('template_directory');?>/images/pa_img_one.png"/><!-- internal_img_one -->
			
			<img class="internal_img_two" src="<?php bloginfo('template_directory');?>/images/pa_imge_two.png"/><!-- internal_img_two -->
			
			<img class="internal_img_three" src="<?php bloginfo('template_directory');?>/images/pa_img_three.png"/><!-- internal_img_two -->
		
		</div><!-- internal_banner_inner -->
		
	</div><!-- internal_banner -->
	
	<div class="container two_col">
		
		<?php get_sidebar(); ?>
		
		<div class="content_wrapper content">
			
			
			<h1 class="page_title"><?php the_title();?></h1><!-- page_title -->
			
			 
			<?php get_template_part( 'loop', 'page' ); ?>
			
			
		</div><!-- content_wrapper -->
		
	</div><!-- container -->
	
</div><!-- internal_main -->


<?php get_footer(); ?>
