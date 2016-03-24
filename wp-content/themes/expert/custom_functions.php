<?php


function expert_get_default_theme_options() {
  $default_theme_options = array(
    'cc_head_elem_back_color'   => '#e8e8e8',
	'shadow_background_color'   => '#ffffff',
    'footer_background_color'   => '#ececec',
    'content_background_color'   => '#ececec',
    'primary_text_color'   => '#1f1f1f',
    'text_headers_color'   => '#1f1f1f',
    'primary_links_color'   => '#575757',
    'primary_links_hover_color'   => '#ffffff',
    'footer_text_color'   => '#1f1f1f',
    'menu_item' => '#dd9100',
	'selected_menu_item' => '#dd9100',
    'heading_font' => 'Segoe UI',
    'body_font' => 'Segoe UI',
    'subtitle_font' => 'Segoe UI',
    'textarea_font' => 'Segoe UI',
	
  );
  
  return apply_filters( 'web_bussines', $default_theme_options );
}

function expert_get_theme_options() {
  return get_theme_mod( 'web_bussines', expert_get_default_theme_options() );
}

function expert_customize_register( $wp_customize ) {
  $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
  $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
 	global $dor_color_control_page;
  $options  = expert_get_theme_options();
  $defaults = expert_get_default_theme_options(); 
  $wp_customize->add_section( 'aaa' , array(
    'title'   => __( 'Schemes', 'sp_webBusiness' ),
    'priority'  => 49,
  ) );
  
  $font_choices[ 'Arial,Helvetica Neue,Helvetica,sans-serif' ] = 'Arial *';
  $font_choices[ 'Arial Black,Arial Bold,Arial,sans-serif' ] = 'Arial Black *';
  $font_choices[ 'Arial Narrow,Arial,Helvetica Neue,Helvetica,sans-serif' ] = 'Arial Narrow *';
  $font_choices[ 'Courier,Verdana,sans-serif' ] = 'Courier *';
  $font_choices[ 'Georgia,Times New Roman,Times,serif' ] = 'Georgia *';
  $font_choices[ 'Times New Roman,Times,Georgia,serif' ] = 'Times New Roman *';
  $font_choices[ 'Trebuchet MS,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Arial,sans-serif' ] = 'Trebuchet MS *';
  $font_choices[ 'Verdana,sans-serif' ] = 'Verdana *';
  $font_choices[ 'American Typewriter,Georgia,serif' ] = 'American Typewriter';
  $font_choices[ 'Andale Mono,Consolas,Monaco,Courier,Courier New,Verdana,sans-serif' ] = 'Andale Mono';
  $font_choices[ 'Baskerville,Times New Roman,Times,serif' ] = 'Baskerville';
  $font_choices[ 'Bookman Old Style,Georgia,Times New Roman,Times,serif' ] = 'Bookman Old Style';
  $font_choices[ 'Calibri,Helvetica Neue,Helvetica,Arial,Verdana,sans-serif' ] = 'Calibri';
  $font_choices[ 'Cambria,Georgia,Times New Roman,Times,serif' ] = 'Cambria';
  $font_choices[ 'Candara,Verdana,sans-serif' ] = 'Candara';
  $font_choices[ 'Century Gothic,Apple Gothic,Verdana,sans-serif' ] = 'Century Gothic';
  $font_choices[ 'Century Schoolbook,Georgia,Times New Roman,Times,serif' ] = 'Century Schoolbook';
  $font_choices[ 'Consolas,Andale Mono,Monaco,Courier,Courier New,Verdana,sans-serif' ] = 'Consolas';
  $font_choices[ 'Constantia,Georgia,Times New Roman,Times,serif' ] = 'Constantia';
  $font_choices[ 'Corbel,Lucida Grande,Lucida Sans Unicode,Arial,sans-serif' ] = 'Corbel';
  $font_choices[ 'Franklin Gothic Medium,Arial,sans-serif' ] = 'Franklin Gothic Medium';
  $font_choices[ 'Garamond,Hoefler Text,Times New Roman,Times,serif' ] = 'Garamond';
  $font_choices[ 'Gill Sans MT,Gill Sans,Calibri,Trebuchet MS,sans-serif' ] = 'Gill Sans MT';
  $font_choices[ 'Helvetica Neue,Helvetica,Arial,sans-serif' ] = 'Helvetica Neue';
  $font_choices[ 'Hoefler Text,Garamond,Times New Roman,Times,sans-serif' ] = 'Hoefler Text';
  $font_choices[ 'Lucida Bright,Cambria,Georgia,Times New Roman,Times,serif' ] = 'Lucida Bright';
  $font_choices[ 'Lucida Grande,Lucida Sans,Lucida Sans Unicode,sans-serif' ] = 'Lucida Grande';
  $font_choices[ 'Palatino Linotype,Palatino,Georgia,Times New Roman,Times,serif' ] = 'Palatino Linotype';
  $font_choices[ 'Tahoma,Geneva,Verdana,sans-serif' ] = 'Tahoma';
  $font_choices[ 'Rockwell, Arial Black, Arial Bold, Arial, sans-serif' ] = 'Rockwell';
   $font_choices[ 'Segoe UI' ] = 'Segoe UI';
  $wp_customize->add_section( 'fonts' , array(
    'title'   => __( 'Fonts', 'sp_webBusiness' ),
    'priority'  => 50,
  ) );
  // Header Font.
  $wp_customize->add_setting( 'theme_mods_expert[_type_headers_font]', array(
    'default'   => $defaults['heading_font'],
	'sanitize_callback'=>'sanitize_text_field',
    'type'      => 'option',
    'capability'  => 'edit_theme_options',	
    'transport'   => 'postMessage'
  ) );
  $wp_customize->add_control( 'theme_mods_expert[_type_headers_font]', array(
    'label'   => __( 'Header Font', 'sp_webBusiness' ),
	'sanitize_callback'=>'sanitize_text_field',
    'section' => 'fonts',
    'settings'  => 'theme_mods_expert[_type_headers_font]',
    'type'    => 'select',
    'choices' => $font_choices
  ) );
  // Body Font.
  $wp_customize->add_setting( 'theme_mods_expert[_type_primary_font]', array(
    'default'   => $defaults['body_font'],
	'sanitize_callback'=>'sanitize_text_field',
    'type'      => 'option',
    'capability'  => 'edit_theme_options',
    'transport'   => 'postMessage'
  ) );
  $wp_customize->add_control( 'theme_mods_expert[_type_primary_font]', array(
    'label'   => __( 'Primary Font (Body)', 'sp_webBusiness' ),
	'sanitize_callback'=>'sanitize_text_field',
    'section' => 'fonts',
    'settings'  => 'theme_mods_expert[_type_primary_font]',
    'type'    => 'select',
    'choices' => $font_choices
  ));
  // Subtitle Font.
  $wp_customize->add_setting( 'theme_mods_expert[_type_secondary_font]', array(
    'default'   => $defaults['subtitle_font'],
	'sanitize_callback'=>'sanitize_text_field',
    'type'      => 'option',
    'capability'  => 'edit_theme_options',
    'transport'   => 'postMessage'
  ) );
  $wp_customize->add_control( 'theme_mods_expert[_type_secondary_font]', array(
    'label'   => __( 'Secondary Font (Subtitle)', 'sp_webBusiness' ),
	'sanitize_callback'=>'sanitize_text_field',
    'section' => 'fonts',
    'settings'  => 'theme_mods_expert[_type_secondary_font]',
    'type'    => 'select',
    'choices' => $font_choices
  ));
  // Inputs and Text Areas Font.
  $wp_customize->add_setting( 'theme_mods_expert[_type_inputs_font]', array(
    'default'   => $defaults['textarea_font'],
	'sanitize_callback'=>'sanitize_text_field',
    'type'      => 'option',
    'capability'  => 'edit_theme_options',
    'transport'   => 'postMessage'
  ) );
  
  $wp_customize->add_control( 'theme_mods_expert[_type_inputs_font]', array(
    'label'   => __( 'Inputs and Text Areas Font', 'sp_webBusiness' ),
	'sanitize_callback'=>'sanitize_text_field',
    'section' => 'fonts',
    'settings'  => 'theme_mods_expert[_type_inputs_font]',
    'type'    => 'select',
    'choices' => $font_choices
  ));
}
add_action( 'customize_register', 'expert_customize_register' );

function expert_customize_preview_js() {
 wp_enqueue_script( 'web_bussines-customizer', get_template_directory_uri() . '/scripts/theme-customizer.js', array( 'customize-preview' ));
}
add_action( 'customize_preview_init', 'expert_customize_preview_js' );