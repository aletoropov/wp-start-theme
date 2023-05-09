<?php
/**
 * Файл основных функций темы
 * 
 * @package WordPress
 * @author Alexandr Toropov <toropovsite@yandex.ru>
 */

//Удаляем ненужные функции WordPress
remove_action( 'wp_head', 'wp_generator' ); 
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );  
remove_action( 'wp_head', 'feed_links', 2 ); 
remove_action( 'wp_head', 'feed_links_extra', 3 ); 

remove_action( 'wp_head', 'start_post_rel_link',10, 0 );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );

remove_action( 'wp_head', 'rest_output_link_wp_head' );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );

remove_action( 'wp_head', 'print_emoji_detection_script', 7) ;
remove_action( 'wp_print_styles', 'print_emoji_styles' );

if ( !is_admin() ) { 
	wp_deregister_script( 'jquery' ); 
}

//Добавление поддержку в тему
add_theme_support( 'menus' );              // поддержка меню   
add_theme_support( 'post-thumbnails' );    // миниатюры
add_theme_support( 'title-tag' );          // позволяет управлять заголовком документа
add_theme_support( 'html5' );              // поддержка HTML5 для форм 
add_theme_support( 'custom-logo' );        // настраиваемый логотип
add_theme_support( 'custom-background' );  // настраивыемый фон

function ale_load_assets() {
	wp_enqueue_style( 'ale_style', get_stylesheet_uri( ) );
	wp_enqueue_script( 'ale_script', get_template_directory_uri(  ) . '/js/scripts.js' );
}

add_action( 'wp_enqueue_scripts', 'ale_load_assets' );

?>