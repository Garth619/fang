<section id="section_four">
	
	<div class="sec_four_inner content">
		
		
		<div class="col">
		
			<?php the_field( 'section_four_column_one' ); ?>

		</div><!-- col -->
		
		<div class="col">
			
			<?php the_field( 'section_four_column_two' ); ?>
		
		</div><!-- col -->
		
	</div><!-- sec_four_inner -->
	
	<?php $sec_four_mobile_image = get_field( 'sec_four_mobile_image' ); ?>
	
	<?php if ( $sec_four_mobile_image ) { ?>
		
		<img class="ram mobile" data-src="<?php echo $sec_four_mobile_image['url']; ?>" alt="<?php echo $sec_four_mobile_image['alt']; ?>" />
		
	<?php } ?>
	
</section><!-- section_four -->