<section id="section_six">
	
	<div class="sec_six_inner">
		
		<div class="sec_six_left">
			
			<div class="sec_six_img_wrapper">
				
				<div class="sec_six_img_bg sec_six_img">
					
					<?php $section_six_image_bg = get_field( 'section_six_image_bg' ); ?>

					<img data-src="<?php echo $section_six_image_bg['url']; ?>" alt="<?php echo $section_six_image_bg['alt']; ?>" />
					
				</div><!-- sec_six_img_bg -->
				
				<div class="sec_six_img_one sec_six_img">
					
					<?php $section_six_image_one = get_field( 'section_six_image_one' ); ?>

					<img data-src="<?php echo $section_six_image_one['url']; ?>" alt="<?php echo $section_six_image_bg['alt']; ?> Image One" />
					
				</div><!-- sec_six_img_one -->
				
				
				<div class="sec_six_img_two sec_six_img">
					
					<?php $section_six_image_two = get_field( 'section_six_image_two' ); ?>

					<img data-src="<?php echo $section_six_image_two['url']; ?>" alt="<?php echo $section_six_image_bg['alt']; ?> Image Two" />
					
				</div><!-- sec_six_img_two -->

				
			</div><!-- sec_six_img_wrapper -->
			
			<div class="sec_six_sidebar">
				
				<div class="sec_six_sidebar_title_wrapper">
			
					<img class="six_count" data-src="<?php bloginfo('template_directory');?>/images/six_count.svg"/>
			
					<img class="three_count" data-src="<?php bloginfo('template_directory');?>/images/three_count.svg"/>
			
					<span><?php the_field( 'section_six_sidebar_title' ); ?></span>
					
				</div><!-- sidebar_pa_title_wrapper -->
					
					<?php if(get_field('section_six_sidebar')): ?>
					
						<ul>
					 
						<?php while(has_sub_field('section_six_sidebar')): ?>
					 
							<li><a href="<?php the_sub_field( 'pa_page_link' ); ?>"><?php the_sub_field( 'pa_page_title' ); ?></a></li>
					    
						<?php endwhile; ?>
						
						</ul>
					 
					<?php endif; ?>
					
				</div><!-- sec_six_sidebar -->
			
		</div><!-- sec_six_left -->
		
		<div class="sec_six_right content">
			
			<blockquote><?php the_field( 'section_six_blockquote' ); ?></blockquote>
			
			<?php the_field( 'section_six_content' ); ?>

		</div><!-- sec_six_right -->
		
	</div><!-- sec_six_inner -->
	
</section><!-- section_six -->