<?php 

/* Template Name: Video Center */

get_header(); ?>


<div id="internal_trigger" class="internal_main">
	
	<div class="grey_topog"><?php echo file_get_contents("wp-content/themes/fang/images/topog.svg"); ?></div><!-- grey_topog -->
	
	<div class="container one_col">
		
		<h1 class="internal_title"><?php the_title();?></h1><!-- internal_title -->
		
		<div class="video_wrapper">
			
			
			<?php if(get_field('videos')): ?>
			 
				<?php while(has_sub_field('videos')): ?>
			 
					<div class="single_video">
				
						<div class="wistia_wrapper">
					
							<div class="wistia_inner wistia_embed wistia_async_<?php the_sub_field( 'wistia_id' ); ?> popover=true popoverContent=thumbnail"></div><!-- wistia_inner -->
					
								<div class="wistia_overlay_intial"></div><!-- wistia_overlay_intial -->
					
								<div class="wistia_overlay">
						
									<div class="play_button_internal">
							
										<div class="play_button_inner"></div><!-- play_button_inner -->
							
									</div><!-- play_button_internal -->
						
								</div><!-- wistia_overlay -->
					
							</div><!-- wistia_wrapper -->
				
						<span class="video_title wistia_embed wistia_async_<?php the_sub_field( 'wistia_id' ); ?> popover=true popoverContent=html"><?php the_sub_field( 'video_title' ); ?></span><!-- video_title -->
				
				</div><!-- single_video -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
		</div><!-- video_wrapper -->
				
	</div><!-- container -->
	
</div><!-- internal_main -->

<script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>

<?php get_footer(); ?>
