<?php
/**
 *  Theme Name: Wordpress Customizer
 */

function fn_customizer_settings($wp_customizer) 
{
  // Add customizer settings
  // Include new section
  $wp_customizer -> add_section('header', array(
    'title' => __('Header Settings', 'BKPK'),
    'priority' => 70
  ));

  // Allow us to add capability to the customizer setting
  $wp_customizer -> add_setting('header_image', array(
    'capability' => 'edit_theme_options'
  ));

  // Add controls in customizer settings
  $wp_customizer -> add_control(new WP_Customize_Image_Control($wp_customizer, 'header_image', array(
    'label' => __('Header Image', 'BKPK'),
    'section' => 'header'
  )));

  // Adding header text
  $wp_customizer -> add_setting('header_text_field', array(
    'capability' => 'edit_theme_options',
    'default' => 'BKPK Unram'
  ));

  // Adding text control
  $wp_customizer -> add_control('header_text_control', array(
    'label' => __('Header Text', 'BKPK'),
    'description' => 'Change Header Text',
    'section' => 'header',
    'settings' => 'header_text_field'
  ));

  // Adding header description text
  $wp_customizer -> add_setting('header_desc_field', array(
    'capability' => 'edit_theme_options',
    'default' => 'Tempat Bimbingan Konseling'
  ));

  // Adding text control
  $wp_customizer -> add_control('header_description_control', array(
    'label' => __('Header Text', 'BKPK'),
    'description' => 'Change Header Description',
    'section' => 'header',
    'settings' => 'header_desc_field'
  ));
}

add_action('customize_register', 'fn_customizer_settings');

?>