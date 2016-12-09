<?php
function custom_theme_scripts() {
	/* CSS */
	wp_enqueue_style( 'Bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(),'3.3.6', 'screen' );
	wp_enqueue_style( 'Estilo.global', get_template_directory_uri().'/assets/css/estilo.min.css', array(),'3.3.6', 'screen' );
	wp_enqueue_style( 'woocommerce.est.global', get_template_directory_uri().'/assets/css/estilo-woocommerce.min.css', array(),'3.3.6', 'screen' );
	wp_enqueue_style( 'hover', get_template_directory_uri().'/assets/css/hover.min.css', array(),'3.3.6', 'screen' );
	wp_enqueue_style( 'slick', get_template_directory_uri().'/assets/css/slick.min.css', array(),'3.3.6', 'screen' );
	wp_enqueue_style( 'slick-theme', get_template_directory_uri().'/assets/css/slick-theme.min.css', array(),'3.3.6', 'screen' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/font-awesome.css', array(),'3.3.6', 'screen' );
	/* JS */
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '3.3.5', true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '3.3.5', true );
	wp_enqueue_script( 'funcoes', get_template_directory_uri() . '/assets/js/funcoes.min.js', array('jquery'), '3.3.5', true );
}

add_action('wp_enqueue_scripts', 'custom_theme_scripts');
