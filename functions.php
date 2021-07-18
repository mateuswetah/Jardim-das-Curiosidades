<?php

if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}

/** Child Theme version */
const JARDIM_DAS_CURIOSIDADES_VERSION = 0.0.1;

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function jardim_das_curiosidades_enqueue_styles() {
	// Enqueue parent styles
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', [], JARDIM_DAS_CURIOSIDADES_VERSION );

	// Load the stylesheet
	wp_enqueue_style( 'jardim-das-curiosidades-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), JARDIM_DAS_CURIOSIDADES_VERSION );
}
add_action( 'wp_enqueue_scripts', 'jardim_das_curiosidades_enqueue_styles' );
