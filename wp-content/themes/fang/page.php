<?php get_header(); ?>

<div id="internal_trigger" class="internal_main">
	
	<?php get_template_part( 'page-templates/template', 'banner' );?>
	
	<div class="container two_col">
		
		<?php get_sidebar(); ?>
		
		<div class="content_wrapper content">
			
			
			<h1 class="page_title"><?php the_title();?></h1><!-- page_title -->
			
			 
			<?php get_template_part( 'loop', 'page' ); ?>
			
			
		</div><!-- content_wrapper -->
		
	</div><!-- container -->
	
</div><!-- internal_main -->


<?php get_footer(); ?>
