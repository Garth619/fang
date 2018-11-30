<?php get_header(); ?>



<div id="internal_trigger" class="internal_main">
	
	<div class="grey_topog"><?php echo file_get_contents("wp-content/themes/fang/images/topog.svg"); ?></div><!-- grey_topog -->
	
	<div class="container one_col">
		
		<div class="not_found_wrapper">
			
			<h1 class="not_found">Page Not Found</h1><!-- not_found -->
			
			<img src="<?php bloginfo('template_directory');?>/images/content01_icon-01.svg"/>
			
			<span class="error_code">Error Code: 404</span><!-- error_code -->
			
			<span class="not_found_description">The page you were looking for appears to have been moved, deleted or does not exist. You could <span class="go_back" onclick="goBack()">go back</span> to where you were or head straight to our <span class="yellow">home page</span>. </span><!-- not_found_description -->
							
		</div><!-- not_found_wrapper -->
				
	</div><!-- container -->
	
</div><!-- internal_main -->
				

	<script type="text/javascript">

		function goBack() {
    	window.history.back();
		}

	</script>

	

<?php get_footer(); ?>