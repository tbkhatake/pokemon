<?php 

// Enfileirar estilos e scripts
function raccoon_enqueue_styles(){
	wp_enqueue_style( 'theme-common',get_template_directory_uri().'/css/common/bundle.css' );

	if(is_home() || is_front_page()){
        wp_enqueue_style( 'theme-home', get_template_directory_uri().'/css/home/bundle.css' );
    }else if(is_page_template('pages/internet.php')){
        wp_enqueue_style( 'theme-home', get_template_directory_uri().'/css/internet/bundle.css' );
	}else if(is_page_template('pages/tv.php')){
		wp_enqueue_style( 'theme-home', get_template_directory_uri().'/css/TV/bundle.css' );
	}else if(is_page_template('pages/combos.php')){
		wp_enqueue_style( 'theme-home', get_template_directory_uri().'/css/combos/bundle.css' );
	}else if(is_page_template('pages/about-us.php')){
		wp_enqueue_style( 'theme-home', get_template_directory_uri().'/css/about-us/bundle.css' );
	}else if(is_page_template('pages/telefone.php')){
        wp_enqueue_style( 'theme-home', get_template_directory_uri().'/css/telefone/bundle.css' );
	}else if(is_page_template('pages/politicas.php')){
        wp_enqueue_style( 'theme-home', get_template_directory_uri().'/css/politicas/bundle.css' );
	}else if(is_page_template('pages/b2b.php')){
		wp_enqueue_style( 'theme-home', get_template_directory_uri().'/css/b2b/bundle.css' );
	
	}else if(is_page_template('pages/servicos-digitais.php')){
		wp_enqueue_style( 'theme-home', get_template_directory_uri().'/css/servicos-digitais/bundle.css' );
	
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