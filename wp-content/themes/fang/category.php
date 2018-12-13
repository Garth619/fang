<?php get_header(); ?>


<div id="internal_trigger" class="internal_main">
	
	<?php get_template_part( 'page-templates/template', 'blogbanner' );?>
	
	<div class="container two_col">
		
		<?php get_sidebar('blog'); ?>
		
		<div class="content_wrapper content">
			
			<h1 class="page_title"><?php printf( __( '%s', '' ), '<span>' . single_cat_title( '', false ) . '</span>' );?></h1><!-- page_title -->
			
			<div class="blog_feed">
			
				<?php get_template_part( 'loop', 'index' );?>
			
			</div><!-- blog_feed -->
			
		</div><!-- content_wrapper -->
		
	</div><!-- container -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>
	
	







				
				
			
		
