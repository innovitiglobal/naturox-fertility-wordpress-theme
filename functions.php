<?php
/**
 * NaturoX Fertility Theme Functions
 */

// Theme Setup
function naturox_fertility_setup() {
    // Add theme support
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'html5' );
    
    // Register navigation menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'naturox-fertility' ),
        'footer' => __( 'Footer Menu', 'naturox-fertility' ),
    ) );
}
add_action( 'after_setup_theme', 'naturox_fertility_setup' );

// Enqueue styles and scripts
function naturox_fertility_scripts() {
    // Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600;700&display=swap' );
    
    // Font Awesome
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' );
    
    // Main stylesheet
    wp_enqueue_style( 'naturox-style', get_stylesheet_uri() );
    
    // Main JavaScript
    wp_enqueue_script( 'naturox-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'naturox_fertility_scripts' );

// Register widget areas
function naturox_fertility_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Footer Widget 1', 'naturox-fertility' ),
        'id'            => 'footer-1',
        'description'   => __( 'Add widgets here to appear in your footer.', 'naturox-fertility' ),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'naturox_fertility_widgets_init' );

// Customizer settings
function naturox_fertility_customizer_register( $wp_customize ) {
    // Contact Information Section
    $wp_customize->add_section( 'contact_info', array(
        'title'    => __( 'Contact Information', 'naturox-fertility' ),
        'priority' => 30,
    ) );
    
    // Phone Number
    $wp_customize->add_setting( 'phone_number', array(
        'default'           => '9930327002',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'phone_number', array(
        'label'   => __( 'Phone Number', 'naturox-fertility' ),
        'section' => 'contact_info',
        'type'    => 'text',
    ) );
    
    // WhatsApp Number
    $wp_customize->add_setting( 'whatsapp_number', array(
        'default'           => '7304600730',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'whatsapp_number', array(
        'label'   => __( 'WhatsApp Number', 'naturox-fertility' ),
        'section' => 'contact_info',
        'type'    => 'text',
    ) );
    
    // Email Address
    $wp_customize->add_setting( 'email_address', array(
        'default'           => 'info@naturoxfertility.com',
        'sanitize_callback' => 'sanitize_email',
    ) );
    $wp_customize->add_control( 'email_address', array(
        'label'   => __( 'Email Address', 'naturox-fertility' ),
        'section' => 'contact_info',
        'type'    => 'email',
    ) );
}
add_action( 'customize_register', 'naturox_fertility_customizer_register' );

// Get customizer options
function naturox_get_option( $option_name, $default = '' ) {
    return get_theme_mod( $option_name, $default );
}
?>