<footer id="footer_trigger">
	
	<div id="consultation" class="footer_form">
		
		<div class="footer_form_inner">
		
			<span class="small_header">Please fill out our form below for your</span><!-- small_header -->
			
			<span class="large_header">Free Consultation</span><!-- large_header -->
			
			<div class="form_accents"><?php echo file_get_contents("wp-content/themes/fang/images/content01_icon-01.svg"); ?></div><!-- form_accents -->
			
			<?php gravity_form(1, false, false, false, '', true, 12); ?>
		
			<span class="required">All Fields Required</span><!-- required -->
		
		</div><!--footer_form_inner -->
		
	</div><!-- footer_form -->
	
	<?php if(is_page_template( 'page-templates/template-contact.php' ) ) { ?>
	
		<div class="location_map_wrapper">
			
			<div class="location_button_wrapper">
				
				<div class="map_button map_left active">View Denver Map</div><!-- map_left -->
				
				<div class="map_button map_right">View Boulder Map</div><!-- map_right -->
				
			</div><!-- location_button_wrapper -->
			
			<div class="location_maps">
				
					<iframe id="denver" class="fadein" src="<?php the_field( 'denver_map_embed','option'); ?>" width="100%" height="600px" style="border:none;"></iframe>

					<iframe id="boulder"  src="<?php the_field( 'boulder_map_embed','option'); ?>" width="100%" height="600px" style="border:none;"></iframe>
				
			</div><!-- location_maps -->
			
		</div><!-- location_map_wrapper -->
	
	<?php } ?>
	
	<div class="footer_bottom">
		
		<div class="footer_inner_bottom">
		
			<div class="footer_col">
				
				<img class="location_svg" data-src="<?php bloginfo('template_directory');?>/images/footer_icon-06.svg"/>
				
				<span class="location_title"><?php the_field( 'denver_title','option'); ?></span><!-- location_title -->
				
				<img class="title_accent" data-src="<?php bloginfo('template_directory');?>/images/six_count.svg"/>
				
				<span class="address"><?php the_field( 'denver_street_address','option'); ?></span><!-- address -->
				
				<a class="get_directions" href="<?php the_field( 'denver_directions_link','option'); ?>" target="_blank" rel="noopener">Get Directions</a><!-- get_directions -->
				
			</div><!-- footer_col -->
			
			<div class="footer_col">
				
					<img data-src="<?php bloginfo('template_directory');?>/images/footer_icon-01.svg"/>
					
					<span class="location_title"><?php the_field( 'boulder_title','option'); ?></span><!-- location_title -->
				
					<img class="title_accent" data-src="<?php bloginfo('template_directory');?>/images/six_count.svg"/>
				
					<span class="address"><?php the_field( 'boulder_street_address','option'); ?></span><!-- address -->
				
					<a class="get_directions" href="<?php the_field( 'boulder_directions_link','option'); ?>" target="_blank" rel="noopener">Get Directions</a><!-- get_directions -->

				
			</div><!-- footer_col -->
			
			<div class="footer_col last_col">
				
				<div class="footer_consult_wrapper">
					
					<img class="six_count" data-src="<?php bloginfo('template_directory');?>/images/six_count.svg"/>
					
					<img class="three_count" data-src="<?php bloginfo('template_directory');?>/images/three_count.svg"/>
					
					<span>GEt YOUR FREE CASE EVALUATION</span><!-- footer_consult_title -->
					
				</div><!-- footer_consult_wrapper -->
				
				<div class="footer_phone_row one">
						
					<span class="footer_phone_title">Phone</span><!-- footer_phone_title -->
						
					<a class="footer_phone" href="tel:<?php the_field( 'phone','option'); ?>"><?php the_field( 'phone','option'); ?></a><!-- footer_phone_title -->
						
				</div><!-- footer_phone_row -->
				
				<div class="footer_phone_row two">
						
					<span class="footer_phone_title">Fax</span><!-- footer_phone_title -->
						
					<span class="footer_phone"><?php the_field( 'fax','option'); ?></span><!-- footer_phone_title -->
						
				</div><!-- footer_phone_row -->

			</div><!-- footer_col -->
			
			<div class="footer_topog">
	
				<?php echo file_get_contents("wp-content/themes/fang/images/topog.svg"); ?>
	
			</div><!-- footer_topog -->
					
		</div><!-- footter_inner_bottom -->
		
	</div><!-- footer_bottom -->
	
	<div class="copyright">
		
		<div class="copyright_inner">
		
			<div class="copright_col">
				
				<?php if(get_field('google_plus_link','option')) { ?>
				
					<a href="<?php the_field( 'google_plus_link','option'); ?>" target="_blank" rel="noopener">
				
						<?php echo file_get_contents("wp-content/themes/fang/images/footer_icon-04.svg"); ?>
				
					</a>
				
				<?php } ?>
				
				<?php if(get_field('linkedin_link','option')) { ?>
				
					<a href="<?php the_field( 'linkedin_link','option'); ?>" target="_blank" rel="noopener">
				
						<?php echo file_get_contents("wp-content/themes/fang/images/linkedin.svg"); ?>
				
					</a>
				
				<?php } ?>
				
				<?php if(get_field('facebook_link','option')) { ?>
				
					<a href="<?php the_field( 'facebook_link','option'); ?>" target="_blank" rel="noopener">
				
						<?php echo file_get_contents("wp-content/themes/fang/images/facebook.svg"); ?>
				
					</a>
					
				<?php } ?>
				
				<?php if(get_field('twitter_link','option')) { ?>

					<a href="<?php the_field( 'twitter_link','option'); ?>" target="_blank" rel="noopener">
				
						<?php echo file_get_contents("wp-content/themes/fang/images/twitter.svg"); ?>
				
					</a>
				
				<?php } ?>

			
			</div><!-- copright_col -->
		
			<div class="copright_col">
			
				<ul>
					<li><?php the_field( 'copyright','option'); ?></li>
					<li><?php the_field( 'all_rights_reserved','option'); ?></li>
					
					<?php if(get_field('disclaimer','option')) { ?>
						
						<li><a href="<?php the_field( 'disclaimer','option'); ?>">Disclaimer</a></li>
					
					<?php } ?>
				</ul>
			
			</div><!-- copright_col -->
		
			<div class="copright_col">
				
				<a class="" href="//ilawyermarketing.com" target="_blank" rel="noopener" alt="ilawyermarketing">
					
					<img data-src="<?php bloginfo('template_directory');?>/images/footer_icon-05.svg"/>
					
				</a>
				
			</div><!-- copright_col -->
		
			</div><!-- copyright_inner -->
		
		</div><!-- copyright -->
		
</footer>

<?php wp_footer();?>

<?php if(is_page_template('page-templates/template-home.php') || is_page_template('page-templates/template-video.php') ) { ?>


<!-- <script src="https://fast.wistia.com/assets/external/E-v1.js" async></script> -->


<?php } ?>



</body>
</html>
