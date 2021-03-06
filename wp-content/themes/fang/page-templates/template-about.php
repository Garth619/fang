<?php 

/* Template Name: About */

get_header(); ?>


<div id="internal_trigger" class="internal_main">
	
	<div class="grey_topog"><?php echo file_get_contents("wp-content/themes/fang/images/topog.svg"); ?></div><!-- grey_topog -->
	
	<div class="about_banner">
		
		<div class="about_banner_inner">
			
			<div class="about_overflow">
			
				<div class="about_banner_content">
				
					<span><?php the_field( 'small_header' ); ?></span>
				
					<h1><?php the_field( 'header' ); ?></h1>
				
					<a class="button desktop" href="#consultation">Click For a Free Consultation</a>
			
					<a class="button mobile" href="#consultation">Tap For a Free Consultation</a>
				
				</div><!-- about_banner_content -->
				
				<?php $about_banner_image_bg = get_field( 'about_banner_image_bg'); ?>

				<img class="about_bg" src="<?php echo $about_banner_image_bg['url']; ?>" alt="<?php echo $about_banner_image_bg['alt']; ?>" />
				
				<?php $about_banner_image_one = get_field( 'about_banner_image_one'); ?>

				<img class="about_img_one" src="<?php echo $about_banner_image_one['url']; ?>" alt="<?php echo $about_banner_image_bg['alt']; ?> Image One" />
				
				
				<?php $about_banner_image_two = get_field( 'about_banner_image_two'); ?>

				<img  class="about_img_two" src="<?php echo $about_banner_image_two['url']; ?>" alt="<?php echo $about_banner_image_bg['alt']; ?> Image Two" />
				
				<?php $about_banner_image_three = get_field( 'about_banner_image_three'); ?>

				<img class="about_img_three" src="<?php echo $about_banner_image_three['url']; ?>" alt="<?php echo $about_banner_image_bg['alt']; ?> Image Three" />
			
			</div><!-- about_overflow -->
		
		</div><!-- internal_banner_inner -->
		
	</div><!-- internal_banner -->
	
	
	<div class="about_wrapper content">
		
		<div class="blockquote_wrapper">
			
			<img src="<?php bloginfo('template_directory');?>/images/content02_icon-01.svg"/>
			
			<blockquote><?php the_field( 'about_blockquote' ); ?></blockquote>
			
			<span class="blockquote_name"><?php the_field( 'about_blockquote_name' ); ?></span><!-- blockquote_name -->
			
		</div><!-- blockquote_wrapper -->
		
		<div class="about_content">
			
			<div id="about_img_trigger" class="about_left">
				
				<div class="about_page_image_wrapper">
				
				<div class="about_page_img_bg about_page_img">
					
					
					<?php $about_image_bg = get_field( 'about_image_bg' ); ?>

					<img src="<?php echo $about_image_bg['url']; ?>" alt="<?php echo $about_image_bg['alt']; ?>" />

					
				</div><!-- about_page_img_bg -->
				
				<div class="about_page_img_one about_page_img">
					
					<?php $about_image_one = get_field( 'about_image_one' ); ?>

					<img src="<?php echo $about_image_one['url']; ?>" alt="<?php echo $about_image_bg['alt']; ?> Image One" />

					
				</div><!-- about_page_img_one -->
				
				<div class="about_page_img_two about_page_img">
					
					<?php $about_image_two = get_field( 'about_image_two' ); ?>

					<img src="<?php echo $about_image_two['url']; ?>" alt="<?php echo $about_image_bg['alt']; ?> Image Three" />
					
				</div><!-- about_page_img_two -->
				
			</div><!-- sec_three_image_wrapper -->
				
			</div><!-- about_left -->
			
			<div class="about_right">
				
				<?php the_field( 'about_content_right' ); ?>
								
			</div><!-- about_right -->
			
		</div><!-- about_content -->
		
		<div class="about_bottom_content">
			
			<div class="about_topog">
				
				<?php echo file_get_contents("wp-content/themes/fang/images/topog.svg"); ?>
				
			</div><!-- about_topog -->
			
			<div class="about_bottom_inner">
				
				<?php the_field( 'about_content_bottom' ); ?>
				
			</div><!-- about_bottom_inner -->
			
			<div class="about_topog_bottom"><?php echo file_get_contents("wp-content/themes/fang/images/topog.svg"); ?></div><!-- about_topog_bottom -->
			
		</div><!-- about_bottom_content -->
		
	</div><!-- about_wrapper -->
	
	
</div><!-- internal_main -->
		
	
<?php get_footer(); ?>
