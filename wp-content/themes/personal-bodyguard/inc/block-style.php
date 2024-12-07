<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage personal-bodyguard
 * @since personal-bodyguard 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since personal-bodyguard 1.0
	 *
	 * @return void
	 */
	function personal_bodyguard_register_block_styles() {
		

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'personal-bodyguard-border',
				'label' => esc_html__( 'Borders', 'personal-bodyguard' ),
			)
		);

		
	}
	add_action( 'init', 'personal_bodyguard_register_block_styles' );
}