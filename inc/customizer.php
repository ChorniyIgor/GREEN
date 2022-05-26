<?php
/**
 * GETG Theme Customizer
 *
 * @package GETG
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function getg_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'getg_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'getg_customize_partial_blogdescription',
			)
		);
	}

	$wp_customize -> add_section('contact', array(
	    'title' => 'Contact information',
        'priority' => 30
    ));

	$wp_customize -> add_setting('contact_phone_usa', array(
	    'default' => '',
        'transport' => 'postMessage',
    ));
    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'contact_phone_usa', array(
        'label' => 'USA phone number',
        'section' => 'contact',
        'settings' => 'contact_phone_usa',
        'type' => 'input'
    )));

    $wp_customize -> add_setting('contact_phone_intl', array(
        'default' => '',
        'transport' => 'postMessage',
    ));
    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'contact_phone_intl', array(
        'label' => 'Intl. phone number',
        'section' => 'contact',
        'settings' => 'contact_phone_intl',
        'type' => 'input'
    )));

    $wp_customize -> add_setting('contact_email_1', array(
        'default' => '',
        'transport' => 'postMessage',
    ));
	$wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'contact_email_1', array(
	    'label' => 'First email address',
        'section' => 'contact',
        'settings' => 'contact_email_1',
        'type' => 'input'
    )));

    $wp_customize -> add_setting('contact_email_2', array(
        'default' => '',
        'transport' => 'postMessage',
    ));
    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'contact_email_2', array(
        'label' => 'Second email address',
        'section' => 'contact',
        'settings' => 'contact_email_2',
        'type' => 'input'
    )));





}
add_action( 'customize_register', 'getg_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function getg_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function getg_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function getg_customize_preview_js() {
	wp_enqueue_script( 'getg-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'getg_customize_preview_js' );


