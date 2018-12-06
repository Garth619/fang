<section id="section_one">
	
		<div class="sec_one_inner">
			
			<span class="small_header"><?php the_field( 'section_one_small_header' ); ?></span><!-- small_header -->
			
			<span class="large_header"><?php the_field( 'section_one_large_header' ); ?></span><!-- large_header -->
			
			<a class="button desktop" href="#consultation">Click For a Free Consultation</a>
			
			<a class="button mobile" href="#consultation">Tap For a Free Consultation</a>
			
			<img class="mouse" src="<?php bloginfo('template_directory');?>/images/mouse.svg"/>
			
			<div class="sec_one_bottom">
				
				<div class="sec_one_left">
					
					<div class="sec_one_slider">
						
						<div class="sec_one_single_slide">
							
							<span class="sec_one_slide_title"><?php the_field( 'section_one_selling_point_title_one' ); ?></span><!-- sec_one_slide_title -->
							
							<span class="sec_one_slide_description"><?php the_field( 'section_one_selling_point_description_one' ); ?></span><!-- sec_one_slide_description -->
							
						</div><!-- sec_one_single_slide -->
						
						<div class="sec_one_single_slide">
							
							<span class="sec_one_slide_title"><?php the_field( 'section_one_selling_point_title_two' ); ?></span><!-- sec_one_slide_title -->
							
							<span class="sec_one_slide_description"><?php the_field( 'section_one_selling_point_description_two' ); ?></span><!-- sec_one_slide_description -->
							
						</div><!-- sec_one_single_slide -->
						
					</div><!-- sec_one_slider -->
					
				</div><!-- sec_one_left -->
				
				<div class="sec_one_right">
					
					<div class="play_wrapper">
						
						<div class="wistia_click wistia_embed wistia_async_<?php the_field( 'section_one_vimeo_id' ); ?> popover=true popoverContent=html"></div><!-- wistia_click -->
						
						<div class="learn_wrapper desktop">
							
							<span class="learn_title"><?php the_field( 'section_one_video_cta_part_one' ); ?> <?php the_field( 'section_one_video_cta_part_two' ); ?></span><!-- learn_title -->
							
							<img src="<?php bloginfo('template_directory');?>/images/header_video_icon-01.svg"/>
							
						</div><!-- learn_wrapper -->
						
						<div class="learn_wrapper mobile one">
							
							<span class="learn_title"><?php the_field( 'section_one_video_cta_part_one' ); ?></span><!-- learn_title -->
							
							<img src="<?php bloginfo('template_directory');?>/images/content03_icon-02.svg"/>
							
						</div><!-- learn_wrapper -->
						
						<div class="play_button_wrapper">
							
							<div class="play_img_overlay">
								
								<?php $section_one_video_image = get_field( 'section_one_video_image' ); ?>
								
								<img src="<?php echo $section_one_video_image['url']; ?>" alt="<?php echo $section_one_video_image['alt']; ?>" />
								
							</div><!-- play_img_overlay -->
							
							<div class="play_button"></div><!-- play_button -->
							
						</div><!-- play_button_wrapper -->
						
						<div class="learn_wrapper mobile two">
							
							<span class="learn_title"><?php the_field( 'section_one_video_cta_part_two' ); ?></span><!-- learn_title -->
							
							<img src="<?php bloginfo('template_directory');?>/images/content03_icon-02.svg"/>
							
						</div><!-- learn_wrapper -->
						
					
						
					</div><!-- play_wrapper -->
					
				</div><!-- sec_one_right -->
				
			</div><!-- sec_one_bottom -->
			
		</div><!-- sec_one_inner -->
	
		<div class="parallax">
			
			<div class="layer_bg layer" data-depth="0.10" data-type="parallax"></div>
			
			<div class="layer_1 layer" data-depth="0.20" data-type="parallax"></div>
			
			<div class="layer_2 layer" data-depth="0.6" data-type="parallax"></div>
			
		</div><!-- parallax -->
	

</section><!-- section_one -->

