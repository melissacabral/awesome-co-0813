<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>

<link rel="stylesheet" type="text/css" media="all" href="<?php echo  get_stylesheet_directory_uri() ?>/styles/reset.css" />

<?php 
//Necessary in <head> for JS and plugins to work. 
//I like it before style.css loads so the theme stylesheet is more specific than all others.
wp_head();  ?>

<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- HTML5 shiv -->
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="clearfix"> 
	<header role="banner">
		<h1 class="site-name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="AwesomeCo" rel="home"> 
			<?php bloginfo('name'); ?> 
		</a></h1>
		<h2 class="site-description"> <?php bloginfo('description'); ?> </h2>
		
		<?php get_search_form(); ?>

		<?php //display the phone number from our options plugin
		$values = get_option('rad_options');
		echo  '<span class="phone">' . $values['phone'] . '</span>';
		echo $values['email'];
		 ?>
		
		<?php wp_nav_menu( array(
			'theme_location' => 'utility_menu',
			'container' => 'false',
			'menu_class' => 'utilities',
		) ); ?>
		
		
		<?php wp_nav_menu( array(
			'theme_location' => 'main_menu',
			'container' => 'nav',
		) ); ?>
	</header>    <!-- end header -->

	<?php 
	//show a large featured image on top of the front page, and a shorter banner on all other views
	if( is_front_page() ):
		the_post_thumbnail( 'awesome-home-banner' );
	elseif( is_singular() AND 'product' != get_post_type() ):
		the_post_thumbnail( 'awesome-interior-banner' );
	endif;
	 ?>

	 <?php //breadcrumbs
	 if(function_exists('dimox_breadcrumbs')):
	 	dimox_breadcrumbs();
	 endif; 
	 ?>