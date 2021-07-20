<?php 

// Enfileirar estilos e scripts
function raccoon_enqueue_styles(){
	wp_enqueue_style( 'theme-common',get_template_directory_uri().'/css/common/bundle.css' );

	if(is_home() || is_front_page()){
        wp_enqueue_style( 'theme-home', get_template_directory_uri().'/css/home/bundle.css' );
    }

	wp_enqueue_script( 'theme-common-js', get_template_directory_uri().'/dist/bundle.js', array(), false, true);
}

add_action( 'wp_enqueue_scripts', 'raccoon_enqueue_styles' );

// Registrar ACF option
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Configurações gerais',
		'menu_title'	=> 'Configurações gerais',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts'
    ));    
}

//Registra menus.

function raccoon_theme_register_menus() {
	register_nav_menus(array(
			'header-menu-mobile'	=> 'Header Menu Mobile',
			'header-menu-desk'	=> 'Header Menu Desk',
			'footer-menu'	=> 'Footer Menu' 
        )
    );
}

add_action( 'after_setup_theme', 'raccoon_theme_register_menus' );