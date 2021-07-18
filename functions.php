<?php

if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}

/** Child Theme version */
const JARDIM_DAS_CURIOSIDADES_VERSION = '0.0.2';

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function jardim_das_curiosidades_enqueue_styles() {

	// Load the stylesheet
	wp_enqueue_style( 'jardim-das-curiosidades-style', get_stylesheet_directory_uri() . '/style.css', array('twentyfifteen-style-css'), JARDIM_DAS_CURIOSIDADES_VERSION );

	// Loads Google Font Poppins
	wp_enqueue_style( 'jardim-das-curiosidades-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap', false ); 
}
add_action( 'wp_enqueue_scripts', 'jardim_das_curiosidades_enqueue_styles' );
