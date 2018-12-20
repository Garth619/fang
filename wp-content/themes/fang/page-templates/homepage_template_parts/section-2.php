<section id="section_two">
	
	<div class="sec_two_inner webp_bg_compression">
				
				
			
		
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
		
		<img class="desktop co" data-src="<?php bloginfo('template_directory');?>/images/co_desktop.png"/>
		<img class="laptop co" data-src="<?php bloginfo('template_directory');?>/images/co_laptop.png"/>
		<img class="tablet co" data-src="<?php bloginfo('template_directory');?>/images/co_tablet.jpg"/>
		<img class="smalltablet co" data-src="<?php bloginfo('template_directory');?>/images/co_975.jpg"/>
		
		
		
		<img class="mobile co" data-webpcomobile="<?php bloginfo('template_directory');?>/images/co_mobile.webp" data-jpgcomobile="<?php bloginfo('template_directory');?>/images/co_mobile.jpg"/>
		
		
		<img class="small co" data-webpcosmall="<?php bloginfo('template_directory');?>/images/co_414.webp" data-jpgcosmall="<?php bloginfo('template_directory');?>/images/co_414.jpg"/>
		
	</div><!-- sec_two_inner -->
	
	
	
	<div class="sec_two_bg webp_bg_compression" data-webpbgsectwo="<?php bloginfo('template_directory');?>/images/sec_one_bg.webp" data-jpgbgsectwo="<?php bloginfo('template_directory');?>/images/sec_one_bg.jpg"></div>
	
	
	
</section><!-- section_two -->