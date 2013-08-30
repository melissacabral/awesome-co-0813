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

//don't close PHP