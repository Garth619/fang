<div class="sidebar_wrapper">
	
	<div class="sidebar_form">
		
		<div class="sidebar_form_inner">
			
			<span class="small_header">Please fill out the form below for your</span><!-- small_header -->
			
			<span class="large_header">Free Consultation</span><!-- large_header -->
			
			<img class="sidebar_accent" src="<?php bloginfo('template_directory');?>/images/content03_icon-01.svg"/>
			
			<?php gravity_form(1, false, false, false, '', true, 189); ?>
			
			<span class="required">All Fields Required</span><!-- required -->
			
		</div><!-- sidebar_form_inner -->
		
		<div class="sidebar_topog">
	
			<?php echo file_get_contents("wp-content/themes/fang/images/topog.svg"); ?>
	
		</div><!-- sidebar_topog -->
		
	</div><!-- sidebar_form -->
	
	<div class="sidebar_blog_bottom">
	
	<div class="sidebar_pa_wrapper blog">
		
		<div class="sidebar_pa_title_wrapper">
			
			<img class="six_count" src="<?php bloginfo('template_directory');?>/images/six_count.svg"/>
			
			<img class="three_count" src="<?php bloginfo('template_directory');?>/images/three_count.svg"/>
			
			<span>Recent Posts</span>
			
		</div><!-- sidebar_pa_title_wrapper -->
		
		<?php dynamic_sidebar( 'recent_posts' ); ?>
		
	</div><!-- sidebar_pa_wrapper -->
	
	<div class="sidebar_pa_wrapper blog">
		
		<div class="sidebar_pa_title_wrapper">
			
			<img class="six_count" src="<?php bloginfo('template_directory');?>/images/six_count.svg"/>
			
			<img class="three_count" src="<?php bloginfo('template_directory');?>/images/three_count.svg"/>
			
			<span>Categories</span>
			
		</div><!-- sidebar_pa_title_wrapper -->
		
		<?php dynamic_sidebar( 'category_sidebar' ); ?>
		
	</div><!-- sidebar_pa_wrapper -->
	
	<div class="sidebar_pa_wrapper blog">
		
		<div class="sidebar_pa_title_wrapper">
			
			<img class="six_count" src="<?php bloginfo('template_directory');?>/images/six_count.svg"/>
			
			<img class="three_count" src="<?php bloginfo('template_directory');?>/images/three_count.svg"/>
			
			<span>Archive</span>
			
		</div><!-- sidebar_pa_title_wrapper -->
		
		<?php dynamic_sidebar( 'archive_sidebar' ); ?>
		
	</div><!-- sidebar_pa_wrapper -->
	
	</div><!-- sidebar_bottom -->
	
</div><!-- sidebar_wrapper -->
	




