<?php 

/* Template Name: Testimonials */

get_header(); ?>


<div id="internal_trigger" class="internal_main">
	
	<div class="grey_topog"><?php echo file_get_contents("wp-content/themes/fang/images/topog.svg"); ?></div><!-- grey_topog -->
	
	<div class="container one_col">
		
		<h1 class="internal_title"><?php the_title();?></h1><!-- internal_title -->
		
		<div class="testimonial_wrapper">
			
			<?php if(get_field('testimonials')): ?>
			 
				<?php while(has_sub_field('testimonials')): ?>
			 
					<div class="single_test">
				
						<img alt="stars icon" class="star" src="<?php bloginfo('template_directory');?>/images/test_icon-01.svg"/>
				
						<span class="test_title"><?php the_sub_field( 'testimonial_intro' ); ?></span><!-- test_title -->
				
						<span class="test_description"><?php the_sub_field( 'testimonial_description' ); ?></span><!-- test_description -->
				
						<img class="test_accent" src="<?php bloginfo('template_directory');?>/images/six_count.svg"/>
						
						<?php if(get_sub_field('testimonial_name')) : ?>
				
							<span class="test_name"><?php the_sub_field( 'testimonial_name' ); ?></span><!-- test_name -->
						
							<?php else : ?> 
							
							<span class="test_name">anonymous</span><!-- test_name -->
							
						<?php endif; ?>
				
					</div><!-- single_test -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
		
		</div><!-- testimonial_wrapper -->
				
	</div><!-- container -->
	
</div><!-- internal_main -->


<?php get_footer(); ?>
