<section id="section_six">
	
	<div class="sec_six_inner">
		
		<div class="sec_six_left">
			
			<div class="sec_six_img"></div><!-- sec_six_img -->
			
			<div class="sec_six_sidebar">
				
				<div class="sec_six_sidebar_title_wrapper">
			
					<img class="six_count" src="<?php bloginfo('template_directory');?>/images/six_count.svg"/>
			
					<img class="three_count" src="<?php bloginfo('template_directory');?>/images/three_count.svg"/>
			
					<span><?php the_field( 'section_six_sidebar_title' ); ?></span>
					
				</div><!-- sidebar_pa_title_wrapper -->
					
				<ul>
					
					<?php $section_six_sidebar_list_items = get_field( 'section_six_sidebar_list_items' ); ?>
					
					<?php if ( $section_six_sidebar_list_items ): ?>
					
						<?php foreach ( $section_six_sidebar_list_items as $post ):  ?>
							
						<?php setup_postdata ( $post ); ?>
								
							<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
							
						<?php endforeach; ?>

						<?php wp_reset_postdata(); ?>

					<?php endif; ?>
					
				</ul>
			
			</div><!-- sec_six_sidebar -->
			
		</div><!-- sec_six_left -->
		
		<div class="sec_six_right content">
			
			<blockquote><?php the_field( 'section_six_blockquote' ); ?></blockquote>
			
			<?php the_field( 'section_six_content' ); ?>

		</div><!-- sec_six_right -->
		
	</div><!-- sec_six_inner -->
	
</section><!-- section_six -->