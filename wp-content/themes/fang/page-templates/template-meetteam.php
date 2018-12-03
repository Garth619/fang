<?php 

/* Template Name: Attorney Directory */

get_header(); ?>

<div id="internal_trigger" class="internal_main">
	
	<div class="grey_topog"><?php echo file_get_contents("wp-content/themes/fang/images/topog.svg"); ?></div><!-- grey_topog -->
	
	<div class="container one_col">
		
		<h1 class="internal_title"><?php the_title();?></h1><!-- internal_title -->
		
		<div class="meet_team_wrapper">
			
			
			<?php $meet_the_team = get_field( 'meet_the_team' ); ?>
			
			<?php if ( $meet_the_team ): ?>
				
				<?php foreach ( $meet_the_team as $post ):  ?>
				
				<?php setup_postdata ( $post ); ?>
			
					<div class="single_att">
				
						<a href="<?php the_permalink();?>">
				
							<div class="att_img_wrapper">
								
								<?php $att_image = get_field( 'att_image' ); ?>
					
								<?php if ( $att_image ) : ?>
			
									<img src="<?php echo $att_image['url']; ?>" alt="<?php echo $att_image['alt']; ?>" />
				
									<?php else : ?>
			
									<img src="<?php bloginfo('template_directory') ?>/images/placeholder.jpg" alt="<?php the_title();?> Placeholder Image" />
			
								<?php endif;?>

					
								<div class="att_img_overlay">
						
									<span>View Profile</span>
						
								</div><!-- att_img_overlay -->
					
							</div><!-- att_img_wrapper -->
				
							<span class="att_name"><?php the_title();?></span><!-- att_name -->
				
							<span class="att_position"><?php the_field( 'attorney_position_title' ); ?></span><!-- att_position -->
				
						</a>
				
					</div><!-- single_att -->
			
			
				<?php endforeach; ?>
				
				<?php wp_reset_postdata(); ?>
				
			<?php endif; ?>
								
		</div><!-- meet_team_wrapper -->
				
	</div><!-- container -->
	
</div><!-- internal_main -->



<?php get_footer(); ?>
