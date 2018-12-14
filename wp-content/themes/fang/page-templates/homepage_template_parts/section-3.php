<section id="section_three" class="content">
	
	
	<div class="sec_three_blockquote_wrapper">
		
		<img data-src="<?php bloginfo('template_directory');?>/images/content02_icon-01.svg"/>
		
		<blockquote><?php the_field( 'section_three_blockquote' ); ?></blockquote>
		
	</div><!-- sec_three_blockquote_wrapper -->
	
	<div class="sec_three_content">
		
		<div class="sec_three_left">
			
			<?php the_field( 'section_three_content' ); ?>

			<a class="button desktop" href="#consultation">Click For a Free Consultation</a>
			
			<a class="button mobile" href="#consultation">Tap For a Free Consultation</a>
			
			</div><!-- sec_three_left -->
		
		<div id="sec_three_trigger" class="sec_three_right">
			
			<div class="sec_three_image_wrapper">
				
				<div class="sec_three_img_bg sec_three_img">
					
					
					<?php $section_three_image_bg = get_field( 'section_three_image_bg' ); ?>

					<img data-src="<?php echo $section_three_image_bg['url']; ?>" alt="<?php echo $section_three_image_bg['alt']; ?>" />
					
					
				</div><!-- sec_three_img_bg -->
				
				<div class="sec_three_img_one sec_three_img">
					
					<?php $section_three_image_one = get_field( 'section_three_image_one' ); ?>

					<img data-src="<?php echo $section_three_image_one['url']; ?>" alt="<?php echo $section_three_image_bg['alt']; ?> Image One" />
					
				</div><!-- sec_three_img_one -->
				
				<div class="sec_three_img_two sec_three_img">
					
					<?php $section_three_image_two = get_field( 'section_three_image_two' ); ?>

					<img data-src="<?php echo $section_three_image_two['url']; ?>" alt="<?php echo $section_three_image_bg['alt']; ?> Image Two" />
					
				</div><!-- sec_three_img_two -->
				
			</div><!-- sec_three_image_wrapper -->
			
		</div><!-- sec_three_right -->
		
	</div><!-- sec_three_content -->

	
</section><!-- section_three -->