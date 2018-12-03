<?php 

/* Template Name: Att Bio */

get_header(); ?>


<div id="internal_trigger" class="internal_main">
	
	<div class="container att_col content">
		
		<div class="att_bio_left">
			
			<?php $att_image = get_field( 'att_image' ); ?>
			
			<?php if ( $att_image ) : ?>
			
				<img src="<?php echo $att_image['url']; ?>" alt="<?php echo $att_image['alt']; ?>" />
				
				<?php else : ?>
			
				<img src="<?php bloginfo('template_directory') ?>/images/placeholder.jpg" alt="<?php the_title();?> Placeholder Image" />
			
			<?php endif;
			
			$myblockquote = get_field( 'blockquote' );
			
			if($myblockquote) { ?>
			
				<blockquote><?php the_field( 'blockquote' ); ?></blockquote>
			
			<?php } ?>
			
		</div><!-- att_bio_left -->
		
		<div class="att_bio_right">
		
			<h1 class="internal_title"><?php the_title();?></h1><!-- internal_title -->
			
			<div class="mobile_att_wrapper">
			
				<?php if ( $att_image ) : ?>
			
					<img src="<?php echo $att_image['url']; ?>" alt="<?php echo $att_image['alt']; ?>" />
				
					<?php else : ?>
			
					<img src="<?php bloginfo('template_directory') ?>/images/placeholder.jpg" alt="<?php the_title();?> Placeholder Image" />
			
				<?php endif;
			
					$myblockquote = get_field( 'blockquote' );
			
					if($myblockquote) { ?>
			
					<blockquote><?php the_field( 'blockquote' ); ?></blockquote>
			
				<?php } ?>
			
			</div><!-- mobile_att_wrapper -->
			
			<?php get_template_part( 'loop', 'page' ); ?>

		</div><!-- att_bio_right -->
		
	</div><!-- container -->
	
</div><!-- internal_main -->

					 
					 	
<?php get_footer(); ?>
