<?php get_header(); ?>



<div id="internal_trigger" class="internal_main">
	
	<div class="grey_topog"><?php echo file_get_contents("wp-content/themes/fang/images/topog.svg"); ?></div><!-- grey_topog -->
	
	<div class="container one_col">
		
		<div class="not_found_wrapper">
			
			<h1 class="not_found"><?php the_field( '404_header','option'); ?></h1><!-- not_found -->
			
			<img src="<?php bloginfo('template_directory');?>/images/content01_icon-01.svg"/>
			
			<span class="error_code"><?php the_field( '404_sub_header','option'); ?></span><!-- error_code -->
			
			<span class="not_found_description"><?php the_field( '404_verbiage','option'); ?> </span><!-- not_found_description -->
							
		</div><!-- not_found_wrapper -->
				
	</div><!-- container -->
	
</div><!-- internal_main -->
				

	<script type="text/javascript">

		function goBack() {
    	window.history.back();
		}

	</script>

	

<?php get_footer(); ?>