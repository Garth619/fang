<?php 

/* Template Name: Attorney Directory */

get_header(); ?>

<div id="internal_trigger" class="internal_main">
	
	<div class="grey_topog"><?php echo file_get_contents("wp-content/themes/fang/images/topog.svg"); ?></div><!-- grey_topog -->
	
	<div class="container one_col">
		
		<h1 class="internal_title"><?php the_title();?></h1><!-- internal_title -->
		
		<div class="meet_team_wrapper">
			
			<div class="single_att">
				
				<a href="">
				
					<div class="att_img_wrapper">
					
						<img src="<?php bloginfo('template_directory');?>/images/ap_img_remington.jpg"/>
					
						<div class="att_img_overlay">
						
							<span>View Profile</span>
						
						</div><!-- att_img_overlay -->
					
					</div><!-- att_img_wrapper -->
				
					<span class="att_name">Remington Fang</span><!-- att_name -->
				
					<span class="att_position">Attorney</span><!-- att_position -->
				
				</a>
				
			</div><!-- single_att -->
			
			<div class="single_att">
				
				<a href="">
				
					<div class="att_img_wrapper">
					
						<img src="<?php bloginfo('template_directory');?>/images/ap_img_remington.jpg"/>
					
						<div class="att_img_overlay">
						
							<span>View Profile</span>
						
						</div><!-- att_img_overlay -->
					
					</div><!-- att_img_wrapper -->
				
					<span class="att_name">Remington Fang</span><!-- att_name -->
				
					<span class="att_position">Attorney</span><!-- att_position -->
				
				</a>
				
			</div><!-- single_att -->
			
			<div class="single_att">
				
				<a href="">
				
					<div class="att_img_wrapper">
					
						<img src="<?php bloginfo('template_directory');?>/images/ap_img_remington.jpg"/>
					
						<div class="att_img_overlay">
						
							<span>View Profile</span>
						
						</div><!-- att_img_overlay -->
					
					</div><!-- att_img_wrapper -->
				
					<span class="att_name">Susan Chadderdon</span><!-- att_name -->
				
					<span class="att_position">Attorney</span><!-- att_position -->
				
				</a>
				
			</div><!-- single_att -->
			
			<div class="single_att">
				
				<a href="">
				
					<div class="att_img_wrapper">
					
						<img src="<?php bloginfo('template_directory');?>/images/placeholder.jpg"/>
					
						<div class="att_img_overlay">
						
							<span>View Profile</span>
						
						</div><!-- att_img_overlay -->
					
					</div><!-- att_img_wrapper -->
				
					<span class="att_name">Remington Fang</span><!-- att_name -->
				
					<span class="att_position">Attorney</span><!-- att_position -->
				
				</a>
				
			</div><!-- single_att -->
			
					
		</div><!-- meet_team_wrapper -->
				
	</div><!-- container -->
	
</div><!-- internal_main -->



<?php get_footer(); ?>
