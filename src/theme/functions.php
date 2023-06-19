<?php 
show_admin_bar(false);

function theme_name_scripts() {
	wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/style.css' );
}


add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );