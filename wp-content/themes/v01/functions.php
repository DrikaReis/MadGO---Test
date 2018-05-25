<?php

remove_action('wp_head', 'wp_generator');

function carrega_scripts(){
	// Bootstrap
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0', 'all');
	// CSS
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), null, 'all');

	// Bootstrap
	wp_enqueue_script( 'bootstrap.min', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array ( 'jquery' ), '4.0.0', true);
	// jQuery
	wp_enqueue_script( 'jquery.min', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', array ( 'jquery' ), '3.2.1', true);
	// Popper
	wp_enqueue_script( 'jquery.min', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array ( 'jquery' ), '3.2.1', true);
	// Main JS
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), null, true);
}

add_action( 'wp_enqueue_scripts', 'carrega_scripts');

// Criando menu
register_nav_menus(
 	array(
 		'menu_principal' => 'Menu Principal'
 	)
);

// Adicionando suportes ao tema
add_theme_support('post-thumbnails');
add_image_size( 'wordpress-thumbnail', 255, 255, TRUE );

