<section id="section_two">
	
	<div class="sec_two_inner">
		
		<div class="sec_two_content content">
			
			<h1><?php the_field( 'section_two_header' ); ?></h1>
			
			<div class="sec_two_content_svg">
				
				<?php echo file_get_contents("wp-content/themes/fang/images/content02_icon-02.svg"); ?>
				
			</div><!-- sec_two_content_svg -->
			
			<div class="sec_two_inner_content content">
			
				<?php $mytrim = wp_trim_words( get_field('section_two_content' ), $num_words = 70, $more = '' ); echo $mytrim; ?>
			
			</div><!-- sec_two_inner_content -->
			
		</div><!-- sec_two_content -->
		
		<div class="sec_two_topog">
		
			<?php echo file_get_contents("wp-content/themes/fang/images/topog.svg"); ?>
		
		</div><!-- sec_two_topog -->
		
	</div><!-- sec_two_inner -->
	
	<div class="sec_two_bg"></div>
	
	
	
</section><!-- section_two -->