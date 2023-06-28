<?php 
add_theme_support('menus');

function theme_name_scripts() { 
	wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_script( 'libs-theme-js', get_template_directory_uri() . '/assets/js/libs.js',array(),false, true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js',array(),false, true );
}


add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
add_theme_support( 'title-tag' );


 
function remove_css_and_js() {
 
	wp_dequeue_style( 'elementor-post-5' );
    wp_dequeue_style( 'swiper' );
 
}

add_action( 'wp_enqueue_scripts', 'remove_css_and_js', 999 );

add_action( 'after_setup_theme', function(){
    
	register_nav_menus( [
		'main_menu' => 'Основное меню',
		'top_drop_menu' => 'Выпадающее меню в шапке',
		'footer_menu' => 'Меню в подвале'
	] );
} );


if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Общие настройки контента',
        'menu_title'    => 'Общие настройки',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Шапка сайта',
        'parent_slug'   => 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Подвал',
        'parent_slug'   => 'theme-general-settings',
    ));
    
}

add_action("wp_head", "wp_head_meta_description", 1);
function wp_head_meta_description() {
	global $post;
	if( is_single() ) {
		echo "<meta name=\"description\" value=\"" . esc_attr( get_post_meta( $post->ID, 'seo_description', true ) ) ."\" />\n\r";
	}
}
