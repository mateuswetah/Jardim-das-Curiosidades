<?php

if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}

/** Child Theme version */
const JARDIM_DAS_CURIOSIDADES_VERSION = '0.0.6';

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function jardim_das_curiosidades_enqueue_styles() {
	// Enqueue parent styles
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

	// Load the stylesheet
	wp_enqueue_style( 'jardim-das-curiosidades-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), JARDIM_DAS_CURIOSIDADES_VERSION );

	// Loads Google Font Poppins
	wp_enqueue_style( 'jardim-das-curiosidades-fonts', 'https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,400;0,700;1,400;1,700&display=swap', false ); 
}
add_action( 'wp_enqueue_scripts', 'jardim_das_curiosidades_enqueue_styles' );

function jardim_das_curiosidades_admin_enqueue_styles() {

	// Loads Google Font Poppins
	wp_enqueue_style( 'jardim-das-curiosidades-fonts', 'https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,400;0,700;1,400;1,700&display=swap', false ); 
}
add_action( 'admin_enqueue_scripts', 'jardim_das_curiosidades_admin_enqueue_styles' );

/**
 * Loads style related to the editor side
 */
function jardim_das_curiosidades_add_editor_style() {
	add_editor_style( 'style-editor.css' );
}
add_action( 'init', 'jardim_das_curiosidades_add_editor_style' );

/**
 * Register block styles.
 *
 */
function jardim_das_curiosidades_block_styles() {

	register_block_style(
		'core/image',
		array(
			'name'  => 'jardim-das-curiosidades-rotated',
			'label' =>  __('Imagem rotacionada', 'jardim-das-curiosidades')
		)
	);
	register_block_style(
		'getwid/template-post-featured-image',
		array(
			'name'  => 'jardim-das-curiosidades-rotated',
			'label' =>  __('Imagem rotacionada', 'jardim-das-curiosidades')
		)
	);
	register_block_style(
		'getwid/images-slider',
		array(
			'name'  => 'jardim-das-curiosidades-rotated',
			'label' =>  __('Imagem rotacionada', 'jardim-das-curiosidades')
		)
	);
}
add_action('init', 'jardim_das_curiosidades_block_styles');