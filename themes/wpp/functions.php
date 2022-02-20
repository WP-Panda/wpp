<?php
/**
 * Описание файлв
 *
 * @package wp-content
 * @version 1.0.0
 * @author WP_Panda
 */

defined( 'ABSPATH' ) || exit;

function add_theme_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script('wpp-main' ,
		get_stylesheet_directory_uri() . '/assets/js/wpp-main.js',
		[ 'jquery' ],
		'0.0.0.2',
		true );

	wp_localize_script('wpp-main', 'WPP',
	[
		'search_array' =>[
			'Искать тут...',
			'Введите поисковую фразу...',
			'Найду все...'
		]
	]);
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

//REMOVE GUTENBERG BLOCK LIBRARY CSS FROM LOADING ON FRONTEND
function remove_wp_block_library_css() {
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'wc-block-style' ); // REMOVE WOOCOMMERCE BLOCK CSS
	wp_dequeue_style( 'global-styles' ); // REMOVE THEME.JSON
}

add_action( 'wp_enqueue_scripts', 'remove_wp_block_library_css', 100 );