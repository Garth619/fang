<?php
	
	/* Template Name: Contact */
	
	get_header(); ?>

<div id="internal_trigger" class="internal_main">
	
	<div class="grey_topog"><?php echo file_get_contents("wp-content/themes/fang/images/topog.svg"); ?></div><!-- grey_topog -->
	
	<div class="container one_col content centered contact">
		
		<h1 class="internal_title centered"><?php the_title();?></h1><!-- internal_title -->
		
		<?php get_template_part( 'loop', 'page' ); ?>
		
		
		<a class="button desktop" href="#consultation">Click For a Free Consultation</a>
			
		<a class="button mobile" href="#consultation">Tap For a Free Consultation</a>
				
	</div><!-- container -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>