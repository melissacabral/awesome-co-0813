<?php 
//activate post featured images
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-background' );

//gives you the ability to add editor-style.css to control the edit screen
add_editor_style();

//only use the post formats you need from the list below!
//'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'
add_theme_support( 'post-formats', 
				      array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );

//add custom image sizes
add_image_size( 'awesome-home-banner', 960, 330, true );
add_image_size( 'awesome-interior-banner', 960, 113, true );

//change the default excerpt length
function awesome_excerpt_length(){
	return 25; //words
}
add_filter( 'excerpt_length', 'awesome_excerpt_length' );

//change the [...] at the end of excerpts
function awesome_readmore(){
	return '<a href="' . get_permalink() . '" class="readmore">Read More</a>';
}
add_filter( 'excerpt_more', 'awesome_readmore' );

//improve UX when replying to comments
function awesome_comment_reply(){
	if( is_singular() AND comments_open() AND get_option('thread_comments') ):
		wp_enqueue_script( 'comment-reply' );
	endif;
}
add_action( 'wp_print_scripts', 'awesome_comment_reply' );

/**
 * Helper Function for showing content on any view.
 * will show excerpts on all archives of the blog
 * @since 0.1
 */
function awesome_content(){
	if( is_single() OR is_page() OR has_post_format( 'gallery' ) ):
		the_content(); 
	else:
		the_excerpt();
	endif;
}

/**
 * Add Menu Area Support
 */
add_action('init', 'awesome_menu_areas');
function awesome_menu_areas(){
	register_nav_menus( array(
		'main_menu' => 'Top Navigation Bar',
		'utility_menu' => 'Utility Area',
		'footer_menu' => 'Footer Menu Area',
		) );
}




 //don't close PHP