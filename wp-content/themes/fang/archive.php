<?php get_header(); ?>

<div id="internal_trigger" class="internal_main">
	
	
	<div class="internal_banner">
		
		<div class="internal_banner_inner">
		
			<img class="internal_bg" src="<?php bloginfo('template_directory');?>/images/intl_blog_header_img_01.jpg"/><!-- internal_bg -->
		
			<img class="internal_img_one" src="<?php bloginfo('template_directory');?>/images/intl_blog_header_img_02.jpg"/><!-- internal_img_one -->
			
			<img class="internal_img_two" src="<?php bloginfo('template_directory');?>/images/intl_blog_header_img_03.jpg"/><!-- internal_img_two -->
			
			<img class="internal_img_three" src="<?php bloginfo('template_directory');?>/images/intl_blog_header_img_04.jpg"/><!-- internal_img_two -->
		
		</div><!-- internal_banner_inner -->
		
	</div><!-- internal_banner -->
	
	<div class="container two_col">
		
		<?php get_sidebar('blog'); ?>
		
		<div class="content_wrapper content">
			
				<?php
	/*
	 * Queue the first post, that way we know
	 * what date we're dealing with (if that is the case).
	 *
	 * We reset this later so we can run the loop
	 * properly with a call to rewind_posts().
	 */
	if ( have_posts() )
		the_post();
?>

			<h1 class="page_title">
			
			<?php if ( is_day() ) : ?>
				
				<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date() ); ?>
				
				<?php elseif ( is_month() ) : ?>
				
				<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyten' ) ) ); ?>
				
				<?php elseif ( is_year() ) : ?>
				
				<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyten' ) ) ); ?>
				
				<?php else : ?>
				
					<?php _e( 'Blog Archives', 'twentyten' ); ?>
			
			<?php endif; ?>
			
			</h1>

			
			<div class="blog_feed">
			
								
<?php
	/*
	 * Since we called the_post() above, we need to
	 * rewind the loop back to the beginning that way
	 * we can run the loop properly, in full.
	 */
	rewind_posts();

	/* include a file called loop-archive.php and that will be used instead.
	 */
	get_template_part( 'loop', 'archive' );
?>

			
			</div><!-- blog_feed -->
			
		</div><!-- content_wrapper -->
		
	</div><!-- container -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>

		


				
			





		




