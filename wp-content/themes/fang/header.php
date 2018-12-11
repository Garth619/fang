<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<style>

@import url('https://fonts.googleapis.com/css?family=Raleway:200,400,600,700,800,900|Unna:400,700');

<?php the_field( 'review_css','option'); ?>

</style>

<?php wp_head(); ?>

<?php the_field('schema_code', 'option'); ?>

<?php the_field('analytics_code', 'option'); ?>

<script type='text/javascript'>
(function (d, t) {
  var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
  bh.type = 'text/javascript';
  bh.src = 'https://www.bugherd.com/sidebarv2.js?apikey=pytccj9w5h9tchbi5aqxqw';
  s.parentNode.insertBefore(bh, s);
  })(document, 'script');
</script>


</head>

<body <?php body_class(); ?>>
	
	
	<header>
		
		<div class="header_left">
			
			<a class="logo" href="<?php bloginfo('url');?>">
				
				<?php $logo = get_field( 'logo','option'); ?>
				
				<?php if ( $logo ) { ?>
				
					<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
				
				<?php } ?>
				
			</a><!-- logo -->
			
		</div><!-- header_left -->
		
		<div class="header_right">
			
			<div class="free_consult">
				
				<span class="free_consult_title">Free Consultation</span><!-- free_consult_title -->
				
				<a class="phone" href="tel:<?php the_field( 'phone' ,'option'); ?>"><?php the_field( 'phone' ,'option'); ?></a>
				
			</div><!-- free_consult -->
			
			<div class="menu_wrapper">
				
				<span class="menu_bar"></span><!-- menu_bar -->
				<span class="menu_bar"></span><!-- menu_bar -->
				<span class="menu_bar"></span><!-- menu_bar -->
				
				<span class="menu_title">Menu</span><!-- menu_title -->
				
			</div><!-- menu_wrapper -->
			
		</div><!-- header_right -->
		
		<div class="mobile_bar">
				
			<span class="free_consult_title">Free Consultation</span><!-- free_consult_title -->
				
			<a class="phone" href="tel:<?php the_field( 'phone' ,'option'); ?>"><?php the_field( 'phone' ,'option'); ?></a>
			
		</div><!-- mobile_bar -->
		
		
	</header>
	
	<div class="sticky_header">
		
		<div class="header_left">
			
			<a class="logo" href="<?php bloginfo('url');?>">
				
				<?php if ( $logo ) { ?>
				
					<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
				
				<?php } ?>
				
			</a><!-- logo -->
			
		</div><!-- header_left -->
		
		<div class="header_right">
			
			<div class="free_consult">
				
				<span class="free_consult_title">Free Consultation</span><!-- free_consult_title -->
				
				<a class="phone" href="tel:<?php the_field( 'phone' ,'option'); ?>"><?php the_field( 'phone' ,'option'); ?></a>
				
			</div><!-- free_consult -->
			
			<div class="menu_wrapper">
				
				<span class="menu_bar"></span><!-- menu_bar -->
				<span class="menu_bar"></span><!-- menu_bar -->
				<span class="menu_bar"></span><!-- menu_bar -->
				
				<span class="menu_title">Menu</span><!-- menu_title -->
				
			</div><!-- menu_wrapper -->
			
		</div><!-- header_right -->
		
	</div><!-- sticky_header -->
	
	
	<nav>
		
		<div class="nav_close">
			
			<img src="<?php bloginfo('template_directory');?>/images/six_count.svg"/>
			
			<div class="close"></div><!-- close -->
			
		</div><!-- nav_close -->
		
		<div class="nav_inner">
			
			<div class="nav_col one">
		
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
			
			</div><!-- nav_col -->
			
			<div class="nav_col two">
		
				<ul class="menu"></ul><!-- menu -->
			
			</div><!-- nav_col -->
			
			<div class="nav_col three">
		
					<ul class="menu"></ul><!-- menu -->
			
			</div><!-- nav_col -->
			
			<div class="nav_col four">
		
					<ul class="menu"></ul><!-- menu -->
			
			</div><!-- nav_col -->
		
		</div><!-- nav_inner -->
		
	</nav>




							