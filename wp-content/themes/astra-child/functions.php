<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );
	wp_enqueue_style('theme-style', get_stylesheet_directory_uri().'/assets/CSS/theme.css', array(), filemtime(get_stylesheet_directory().'/assets/CSS/theme.css'));
}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

add_filter('wp_nav_menu_items','add_menu_admin',10,2);

function add_menu_admin($items,$args) {
	if (is_user_logged_in())	{
		$adminLink.='<li id="admin-link"class="menu-item"><a class= "menu-link" href="http://localhost/Planty/wp-admin/index.php"> Admin </a></li>';}

		return $adminLink.$items;
}