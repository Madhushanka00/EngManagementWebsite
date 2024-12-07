<?php
/**
 * Personal Bodyguard functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package personal-bodyguard
 * @since personal-bodyguard 1.0
 */

if ( ! function_exists( 'personal_bodyguard_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since personal-bodyguard 1.0
	 *
	 * @return void
	 */
	function personal_bodyguard_support() {

		load_theme_textdomain( 'personal-bodyguard', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		add_theme_support( 'responsive-embeds' );
		
		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );
	}

endif;

add_action( 'after_setup_theme', 'personal_bodyguard_support' );

if ( ! function_exists( 'personal_bodyguard_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since personal-bodyguard 1.0
	 *
	 * @return void
	 */
	function personal_bodyguard_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'personal-bodyguard-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'personal-bodyguard-style' );

		wp_style_add_data( 'personal-bodyguard-style', 'rtl', 'replace' );

		wp_enqueue_style( 'dashicons' );
	}

endif;

add_action( 'wp_enqueue_scripts', 'personal_bodyguard_styles' );

/* Enqueue Custom Js */
function personal_bodyguard_scripts() {

	wp_enqueue_script(
        'personal-bodyguard-scroll-to-top',
        esc_url(get_template_directory_uri()) . '/assets/js/scroll-to-top.js',
        array(), 
        null, 
        true // Load in footer
    );
}
add_action( 'wp_enqueue_scripts', 'personal_bodyguard_scripts' );

// Add block patterns
require get_template_directory() . '/inc/block-pattern.php';

// Add block Style
require get_template_directory() . '/inc/block-style.php';

// TGM
require get_template_directory() . '/inc/tgm/plugin-activation.php';