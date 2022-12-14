<?php
/**
 * WP_Rig\WP_Rig\Editor\Component class
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig\Editor;

use WP_Rig\WP_Rig\Component_Interface;
use function add_action;
use function add_theme_support;

/**
 * Class for integrating with the block editor.
 *
 * @link https://wordpress.org/gutenberg/handbook/extensibility/theme-support/
 */
class Component implements Component_Interface {

	/**
	 * Gets the unique identifier for the theme component.
	 *
	 * @return string Component slug.
	 */
	public function get_slug() : string {
		return 'editor';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'after_setup_theme', array( $this, 'action_add_editor_support' ) );
	}

	/**
	 * Adds support for various editor features.
	 */
	public function action_add_editor_support() {
		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Add support for default block styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for wide-aligned images.
		add_theme_support( 'align-wide' );

		/**
		 * Add support for color palettes.
		 *
		 * To preserve color behavior across themes, use these naming conventions:
		 * - Use primary and secondary color for main variations.
		 * - Use `theme-[color-name]` naming standard for standard colors (red, blue, etc).
		 * - Use `custom-[color-name]` for non-standard colors.
		 *
		 * Add the line below to disable the custom color picker in the editor.
		 * add_theme_support( 'disable-custom-colors' );
		 */
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'wp-rig' ),
					'slug'  => 'theme-primary',
					'color' => '#9a150f',
				),
				array(
					'name'  => __( 'Secondary', 'wp-rig' ),
					'slug'  => 'theme-secondary',
					'color' => '#6a4e46',
				),
				array(
					'name'  => __( 'Red', 'wp-rig' ),
					'slug'  => 'theme-red',
					'color' => '#e71d36',
				),
				array(
					'name'  => __( 'Green', 'wp-rig' ),
					'slug'  => 'theme-green',
					'color' => '#a9e5bb',
				),
				array(
					'name'  => __( 'Blue', 'wp-rig' ),
					'slug'  => 'theme-blue',
					'color' => '#086375',
				),
				array(
					'name'  => __( 'Blue alt', 'wp-rig' ),
					'slug'  => 'theme-blue-alt',
					'color' => '#67bfff',
				),
				array(
					'name'  => __( 'Yellow', 'wp-rig' ),
					'slug'  => 'theme-yellow',
					'color' => '#ffc02d',
				),
				array(
					'name'  => __( 'Black', 'wp-rig' ),
					'slug'  => 'theme-black',
					'color' => '#141414',
				),
				array(
					'name'  => __( 'Grey', 'wp-rig' ),
					'slug'  => 'theme-grey',
					'color' => '#f2edeb',
				),
				array(
					'name'  => __( 'White', 'wp-rig' ),
					'slug'  => 'theme-white',
					'color' => '#fff',
				),
				array(
					'name'  => __( 'Dusty daylight', 'wp-rig' ),
					'slug'  => 'custom-daylight',
					'color' => '#fffecb',
				),
				array(
					'name'  => __( 'Dusty sun', 'wp-rig' ),
					'slug'  => 'custom-sun',
					'color' => '#fea82f',
				),
				array(
					'name'  => __( 'Custom Background', 'wp-rig' ),
					'slug'  => 'custom-bg',
					'color' => '#fffdf7',
				),
				array(
					'name'  => __( 'Custom gold', 'wp-rig' ),
					'slug'  => 'custom-gold',
					'color' => '#ffc43b',
				),
				array(
					'name'  => __( 'Custom shadow', 'wp-rig' ),
					'slug'  => 'custom-shadow',
					'color' => '#afafaf',
				),
			)
		);

		/*
		 * Add support custom font sizes.
		 *
		 * Add the line below to disable the custom color picker in the editor.
		 * add_theme_support( 'disable-custom-font-sizes' );
		 */
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'wp-rig' ),
					'shortName' => __( 'S', 'wp-rig' ),
					'size'      => 16,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Medium', 'wp-rig' ),
					'shortName' => __( 'M', 'wp-rig' ),
					'size'      => 25,
					'slug'      => 'medium',
				),
				array(
					'name'      => __( 'Large', 'wp-rig' ),
					'shortName' => __( 'L', 'wp-rig' ),
					'size'      => 31,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Larger', 'wp-rig' ),
					'shortName' => __( 'XL', 'wp-rig' ),
					'size'      => 39,
					'slug'      => 'larger',
				),
			)
		);
	}
}
