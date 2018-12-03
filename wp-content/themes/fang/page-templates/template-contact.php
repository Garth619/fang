<?php
	
	/* Template Name: Contact */
	
	get_header(); ?>

<div id="internal_trigger" class="internal_main">
	
	<div class="grey_topog"><?php echo file_get_contents("wp-content/themes/fang/images/topog.svg"); ?></div><!-- grey_topog -->
	
	<div class="container one_col content centered contact">
		
		<h1 class="internal_title centered"><?php the_title();?></h1><!-- internal_title -->
		
		<h2>Get your free case evaluation</h2>
		
		<p>ad minim veniam, xercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
		
		<a class="button desktop" href="#consultation">Click For a Free Consultation</a>
			
		<a class="button mobile" href="#consultation">Tap For a Free Consultation</a>
				
	</div><!-- container -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>