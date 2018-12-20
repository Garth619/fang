<section id="section_five">
	
	<div class="sec_five_topog"><?php echo file_get_contents("wp-content/themes/fang/images/topog.svg"); ?></div><!-- sec_five_topog -->
	
	<div class="sec_five_topog_two"><?php echo file_get_contents("wp-content/themes/fang/images/topog.svg"); ?></div><!-- sec_five_topog_two -->
	
	<div class="sec_five_inner">
		
		<div class="sec_five_button sec_five_button_left"></div><!-- sec_five_button -->
		
		<div class="sec_five_slider">
			
			
			<?php if(get_field('section_five_testimonials')): ?>
			 
				<?php while(has_sub_field('section_five_testimonials')): ?>
			 
					<div class="sec_five_single_slide">
				
						<div class="sec_five_single_inner">
				
							<img class="sec_five_stars" data-src="<?php bloginfo('template_directory');?>/images/test_icon-01.svg"/>
				
							<span class="sec_five_intro"><?php the_sub_field( 'testimonial_intro' ); ?></span><!-- sec_five_intro -->
				
							<span class="sec_five_description"><?php the_sub_field( 'testimonial_description' ); ?></span><!-- sec_five_description -->
				
							<a class="button" href="<?php the_field( 'read_all_reviews_link' ); ?>"><?php the_field( 'read_all_reviews_verbiage' ); ?></a><!-- button -->
				
					</div><!-- sec_five_single_inner -->
				
				</div><!-- sec_five_single_slide -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
			
		</div><!-- sec_five_slider -->
		
		<div class="sec_five_button sec_five_button_right"></div><!-- sec_five_button -->
		
	</div><!-- sec_five_inner -->
	
</section><!-- section_five -->