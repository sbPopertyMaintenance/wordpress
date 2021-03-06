<?php

function register_main_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_main_menu' );

add_action( 'wp_ajax_nopriv_send_quote_request', 'send_quote_request' );
include( get_template_directory() . '/services/email/quote.php' );

function send_quote_request(){
  send_quote();
}

function my_theme_scripts() {
  wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0.0', true );

  wp_localize_script('main-js', 'myVar', array(
    'ajax_url' => admin_url('admin-ajax.php'),
  ));
  
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );


// THEME CUSTOMIZER SETTINGS
$args = array(
	'flex-width'    => true,
	'width'         => 980,
	'flex-height'    => true,
	'height'        => 200,
	'default-image' => get_template_directory_uri() . '/images/HeaderPhoto.jpg',
);
add_theme_support( 'custom-header', $args );

include( get_template_directory() . '/includes/wp-customizer.php' );
add_action( 'customize_register', 'sbtheme_customize_register' );

// YOAST FIX
function yoast_is_toast(){
    //capability of 'manage_plugins' equals admin, therefore if NOT administrator
    //hide the meta box from all other roles on the following 'post_type' 
    //such as post, page, custom_post_type, etc
    remove_meta_box('wpseo_meta', 'post', 'normal');
    remove_meta_box('wpseo_meta', '', 'normal');
    remove_meta_box('wpseo_meta', 'oil_price', 'normal');
}
add_action('add_meta_boxes', 'yoast_is_toast', 99);

// ADD STYLESHEET
function sb_stylesheets(){
  wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/dist/css/style.css' );
}    
add_action( 'wp_enqueue_scripts', 'sb_stylesheets' );

