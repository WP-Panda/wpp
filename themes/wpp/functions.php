<?php
/**
 * Описание файлв
 *
 * @package wp-content
 * @version 1.0.0
 * @author WP_Panda
 */

defined( 'ABSPATH' ) || exit;

require_once 'core/init.php';

function add_theme_scripts() {
	wp_register_style( 'wpp-font', get_stylesheet_directory_uri() . '/assets/font-head.css', [], '0.0.0.2' );
	wp_enqueue_style( 'wpp-header', get_stylesheet_directory_uri() . '/assets/wpp-header.css', ['wpp-font'], '0.0.0.2' );

	wp_enqueue_script( 'wpp-header',
		get_stylesheet_directory_uri() . '/assets/wpp-header.js',
		[ 'jquery' ],
		'0.0.0.2',
		true );

	wp_localize_script( 'wpp-header',
		'WPP',
		[
			'search_array' => [
				'Искать тут...',
				'Введите поисковую фразу...',
				'Найду все...'
			]
		] );

	wp_enqueue_script( 'wpp-footer',
		get_stylesheet_directory_uri() . '/assets/wpp-footer.js',
		[ 'jquery' ],
		'0.0.0.2',
		true );
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function add_footer_scripts() {
	wp_enqueue_style( 'fonts', get_stylesheet_directory_uri() . '/assets/fonts-footer.css', [], '0.0.0.2' );
	wp_enqueue_style( 'wpp-footer', get_stylesheet_directory_uri() . '/assets/wpp-header.css', ['wpp-font'], '0.0.0.2' );
}
add_action( 'wp_footer', 'add_footer_scripts' );