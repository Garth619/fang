<?php 

/* Template Name: Case Results */

get_header(); ?>


<div id="internal_trigger" class="internal_main">
	
	<div class="grey_topog"><?php echo file_get_contents("wp-content/themes/fang/images/topog.svg"); ?></div><!-- grey_topog -->
	
	<div class="container one_col">
		
		<h1 class="internal_title"><?php the_title();?></h1><!-- internal_title -->
		
		<div class="case_results_internal">
			
			
			<?php if(get_field('case_results_internal')): ?>
			 
				<?php while(has_sub_field('case_results_internal')): ?>
				
				
					<div class="single_cr">
				
						<img src="<?php bloginfo('template_directory');?>/images/content02_icon-01.svg"/>
				
						<span class="cr_amount"><?php the_sub_field( 'case_results_amount' ); ?></span><!-- cr_amount -->
				
						<span class="cr_type"><?php the_sub_field( 'case_results_type_internal' ); ?></span><!-- cr_type -->
				
						<span class="cr_description"><?php the_sub_field( 'case_results_description' ); ?></span><!-- cr_description -->
				
						<img class="cr_six_count" src="<?php bloginfo('template_directory');?>/images/six_count.svg"/>
				
					</div><!-- single_cr -->
			 
				
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
				
		</div><!-- case_results_internal -->
				
	</div><!-- container -->
	
</div><!-- internal_main -->
				
			  


<?php get_footer(); ?>
