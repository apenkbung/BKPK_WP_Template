<?php

/**
 *  Template Name: functions.php
 *  Description: Add features to wordpress
 */


// Add customizer.php file
require_once('templates/helpers/customizer.php');

function fn_theme_scripts()
{
	/** Include style files */
	wp_enqueue_style('theme-style', get_template_directory_uri() . './style.css');

	/** Include Main Javascript */
	wp_enqueue_script('script', get_template_directory_uri() . './assets/js/main.js');
}

add_action('wp_enqueue_scripts', 'fn_theme_scripts');

// Adding new features to wordpress themes
function fn_theme_supports()
{
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('html5', array('search-form'));
	add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'fn_theme_supports');

// Register Navigation Menu
function fn_nav_menu()
{
	register_nav_menus(array(
		'primary-menu' => __('Primary Menu', 'text_domain'),
		'footer-menu' => __('Footer Menu', 'text_domain'),
	));
}

add_action('init', 'fn_nav_menu');

function my_wp_nav_menu_objects($objects, $args)
{
	foreach ($objects as $key => $item) {
		$objects[$key]->classes[] = 'nav__item';
	}
	return $objects;
}
add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

function fn_custom_excerpt_length($length)
{
	return 15;
}

add_filter('excerpt_length', 'fn_custom_excerpt_length');


function remove_admin_login_header()
{
	remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');
