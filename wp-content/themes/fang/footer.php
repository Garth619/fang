<footer id="footer_trigger">
	
	<div class="footer_form">
		
		<div class="footer_form_inner">
		
			<span class="small_header">Please fill out our form below for your</span><!-- small_header -->
			
			<span class="large_header">Free Consultation</span><!-- large_header -->
			
			<div class="form_accents"><?php echo file_get_contents("wp-content/themes/fang/images/content01_icon-01.svg"); ?></div><!-- form_accents -->
			
			<?php gravity_form(1, false, false, false, '', true, 12); ?>
		
			<span class="required">All Fields Required</span><!-- required -->
		
		</div><!--footer_form_inner -->
		
	</div><!-- footer_form -->
	
	<div class="footer_bottom">
		
		<div class="footer_inner_bottom">
		
			<div class="footer_col">
				
				<img class="location_svg" src="<?php bloginfo('template_directory');?>/images/footer_icon-06.svg"/>
				
				<span class="location_title">Denver</span><!-- location_title -->
				
				<img class="title_accent" src="<?php bloginfo('template_directory');?>/images/six_count.svg"/>
				
				<span class="address">1515 Wynkoop Street, Suite 360<br/> Denver, CO 80202</span><!-- address -->
				
				<a class="get_directions" href="https://www.google.com/maps/place/1515+Wynkoop+St+%23360,+Denver,+CO+80202/@39.7514238,-105.0042689,17z/data=!4m13!1m7!3m6!1s0x876c78c3f5e2b409:0x33791d9202f38ac9!2s1515+Wynkoop+St+%23360,+Denver,+CO+80202!3b1!8m2!3d39.7514238!4d-105.0020802!3m4!1s0x876c78c3f5e2b409:0x33791d9202f38ac9!8m2!3d39.7514238!4d-105.0020802" target="_blank" rel="noopener">Get Directions</a><!-- get_directions -->
				
			</div><!-- footer_col -->
			
			<div class="footer_col">
				
					<img src="<?php bloginfo('template_directory');?>/images/footer_icon-01.svg"/>
					
					<span class="location_title">Boulder</span><!-- location_title -->
				
					<img class="title_accent" src="<?php bloginfo('template_directory');?>/images/six_count.svg"/>
				
					<span class="address">4450 Arapahoe Avenue, Suite 100<br/> Boulder, Colorado 80303</span><!-- address -->
				
					<a class="get_directions" href="https://www.google.com/maps/place/4450+Arapahoe+Ave+%23100,+Boulder,+CO+80303/@40.0143472,-105.2410943,17z/data=!3m1!4b1!4m5!3m4!1s0x876bede8e42082b7:0x63b45bc381088edf!8m2!3d40.0143431!4d-105.2389056" target="_blank" rel="noopener">Get Directions</a><!-- get_directions -->

				
			</div><!-- footer_col -->
			
			<div class="footer_col last_col">
				
				<div class="footer_consult_wrapper">
					
					<img class="six_count" src="<?php bloginfo('template_directory');?>/images/six_count.svg"/>
					
					<img class="three_count" src="<?php bloginfo('template_directory');?>/images/three_count.svg"/>
					
					<span>GEt YOUR FREE CASE EVALUATION</span><!-- footer_consult_title -->
					
				</div><!-- footer_consult_wrapper -->
				
				<div class="footer_phone_row one">
						
					<span class="footer_phone_title">Phone</span><!-- footer_phone_title -->
						
					<span class="footer_phone">(303)993-4323</span><!-- footer_phone_title -->
						
				</div><!-- footer_phone_row -->
				
				<div class="footer_phone_row two">
						
					<span class="footer_phone_title">Fax</span><!-- footer_phone_title -->
						
					<span class="footer_phone">(303)862-8978</span><!-- footer_phone_title -->
						
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
			
				<a href="" target="_blank" rel="noopener">
				
					<?php echo file_get_contents("wp-content/themes/fang/images/footer_icon-04.svg"); ?>
				
				</a>
			
			</div><!-- copright_col -->
		
			<div class="copright_col">
			
				<ul>
					<li>The Fang Law Firm © 2018</li>
					<li>All Rights Reserved</li>
					<li><a href="">Disclaimer</a></li>
				</ul>
			
			</div><!-- copright_col -->
		
			<div class="copright_col">
				
				<a class="" href="" target="_blank" rel="noopener">
					
					<img src="<?php bloginfo('template_directory');?>/images/footer_icon-05.svg"/>
					
				</a>
				
			</div><!-- copright_col -->
		
			</div><!-- copyright_inner -->
		
		</div><!-- copyright -->
		
</footer>


<?php wp_footer();?>


</body>
</html>
