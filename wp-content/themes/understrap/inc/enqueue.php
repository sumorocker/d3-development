<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme = wp_get_theme();
		wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), $the_theme->get( 'Version' ) );
		wp_enqueue_script( 'menujs', get_template_directory_uri() . '/js/index.js', array(), $the_theme->get( 'Version' ), true );
		wp_enqueue_script( 'accordion-js', get_template_directory_uri() . '/js/accordion.js', array(), $the_theme->get( 'Version' ), true );
		wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), $the_theme->get( 'Version' ), true );
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $the_theme->get( 'Version' ), true );
		wp_enqueue_script( 'scrollme-js', get_template_directory_uri() . '/js/jquery.scrollme.js', array(), $the_theme->get( 'Version' ), true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
