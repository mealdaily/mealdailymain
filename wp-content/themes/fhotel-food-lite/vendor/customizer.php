<?php 
function fhotel_food_lite_customize_register($wp_customize){

    // Register custom section types.
    $wp_customize->register_section_type( 'fhotel_food_lite_Customize_Section_Pro' );

    // Register sections.
    $wp_customize->add_section( new fhotel_food_lite_Customize_Section_Pro(
        $wp_customize,
        'theme_go_pro',
        array(
            'priority' => 1,
            'title'    => esc_html__( 'FHotel Food Pro', 'fhotel-food-lite' ),
            'pro_text' => esc_html__( 'Upgrade To Pro', 'fhotel-food-lite' ),
            'pro_url'  => 'https://www.featherthemes.com/themes/wordpress-template-fhotel-food-pro/',
        )
    ) );
    $wp_customize->add_section('fhotel_food_lite_header', array(
        'title'    => esc_html__('Header Phone and Email', 'fhotel-food-lite'),
        'description' => '',
        'priority' => 30,
    ));
     $wp_customize->add_section('fhotel_food_lite_social', array(
        'title'    => esc_html__('Social Section', 'fhotel-food-lite'),
        'description' => '',
        'priority' => 35,
    ));


    //  =============================
    //  = Text Input phone number                =
    //  =============================
    $wp_customize->add_setting('fhotel_food_lite_phone', array(
        'default'        => '',
        'sanitize_callback' => 'fhotel_food_lite_sanitize_phone_number'
    ));
 
    $wp_customize->add_control('fhotel_food_lite_phone', array(
        'label'      => esc_html__('Phone Number', 'fhotel-food-lite'),
        'section'    => 'fhotel_food_lite_header',
        'setting'   => 'fhotel_food_lite_phone',
        'type'    => 'text'
    ));
    
      
    //  =============================
    //  = Text Input Email                =
    //  =============================
    $wp_customize->add_setting('fhotel_food_lite_address', array(
        'default'        => '',
        'sanitize_callback' => 'sanitize_email'       
    ));
 
    $wp_customize->add_control('fhotel_food_lite_address', array(
        'label'      => esc_html__('Email Address', 'fhotel-food-lite'),
        'section'    => 'fhotel_food_lite_header',
        'setting'   => 'fhotel_food_lite_address',
        'type'    => 'email'
    ));
    
    //  =============================
    //  = Text Input facebook                =
    //  =============================
    $wp_customize->add_setting('fhotel_food_lite_fb', array(
        'default'        => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control('fhotel_food_lite_fb', array(
        'label'      => esc_html__('Facebook', 'fhotel-food-lite'),
        'section'    => 'fhotel_food_lite_social',
        'setting'   => 'fhotel_food_lite_fb',
    ));
    //  =============================
    //  = Text Input Twitter                =
    //  =============================
    $wp_customize->add_setting('fhotel_food_lite_twitter', array(
        'default'        => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control('fhotel_food_lite_twitter', array(
        'label'      => esc_html__('Twitter', 'fhotel-food-lite'),
        'section'    => 'fhotel_food_lite_social',
        'setting'   => 'fhotel_food_lite_twitter',
    ));
    //  =============================
    //  = Text Input youtube                =
    //  =============================
    $wp_customize->add_setting('fhotel_food_lite_youtube', array(
        'default'        => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control('fhotel_food_lite_youtube', array(
        'label'      => esc_html__('YouTube', 'fhotel-food-lite'),
        'section'    => 'fhotel_food_lite_social',
        'setting'   => 'fhotel_food_lite_youtube',
    ));
    //  =============================
    //  = Text Input linkedin                =
    //  =============================
    $wp_customize->add_setting('fhotel_food_lite_in', array(
        'default'        => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control('fhotel_food_lite_in', array(
        'label'      => esc_html__('Linkedin', 'fhotel-food-lite'),
        'section'    => 'fhotel_food_lite_social',
        'setting'   => 'fhotel_food_lite_in',
    ));

    //  =============================
    //  = slider section              =
    //  =============================
    $wp_customize->add_section('fhotel_food_lite_banner', array(
        'title'    => esc_html__('Home Banner Text', 'fhotel-food-lite'),
        'description' => esc_html__('add home banner text here.','fhotel-food-lite'),
        'priority' => 36,
    ));
   
// Banner heading Text
    $wp_customize->add_setting('banner_heading',array(
            'default'   => null,
            'sanitize_callback' => 'sanitize_text_field'    
    ));
    
    $wp_customize->add_control('banner_heading',array( 
            'type'  => 'text',
            'label' => esc_html__('Add Banner heading here','fhotel-food-lite'),
            'section'   => 'fhotel_food_lite_banner',
            'setting'   => 'banner_heading'
    )); // Banner heading Text

    // Banner heading Text
    $wp_customize->add_setting('banner_sub_heading',array(
            'default'   => null,
            'sanitize_callback' => 'sanitize_text_field'    
    ));
    
    $wp_customize->add_control('banner_sub_heading',array( 
            'type'  => 'text',
            'label' => esc_html__('Add Banner sub heading here','fhotel-food-lite'),
            'section'   => 'fhotel_food_lite_banner',
            'setting'   => 'banner_sub_heading'
    )); // Banner heading Text

    //  =============================
    //  = box section              =
    //  =============================
    $wp_customize->add_section('fhotel_food_lite_box', array(
        'title'    => esc_html__('Resource Section', 'fhotel-food-lite'),
        'description' => esc_html__('Upload image, it will auto crop with 400*250.','fhotel-food-lite'),
        'priority' => 36,
    ));
   
    $wp_customize->add_setting('fhotel_food_lite_box1',array(
            'default'   => '0',         
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'fhotel_food_lite_sanitize_page'
    ));
    
    $wp_customize->add_control('fhotel_food_lite_box1',array(
            'type'  => 'dropdown-pages',
            'label' => esc_html__('Select page for Resource first:','fhotel-food-lite'),
            'section'   => 'fhotel_food_lite_box'
    )); 

    $wp_customize->add_setting('fhotel_food_lite_box2',array(
            'default'   => '0',         
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'fhotel_food_lite_sanitize_page'
    ));
    
    $wp_customize->add_control('fhotel_food_lite_box2',array(
            'type'  => 'dropdown-pages',
            'label' => esc_html__('Select page for Resource second:','fhotel-food-lite'),
            'section'   => 'fhotel_food_lite_box'
    )); 

    $wp_customize->add_setting('fhotel_food_lite_box3',array(
            'default'   => '0',         
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'fhotel_food_lite_sanitize_page'
    ));
    
    $wp_customize->add_control('fhotel_food_lite_box3',array(
            'type'  => 'dropdown-pages',
            'label' => esc_html__('Select page for Resource third:','fhotel-food-lite'),
            'section'   => 'fhotel_food_lite_box'
    ));    

//  =============================
    //  = box section              =
    //  =============================

  //  =============================
    //  = Footer              =
    //  =============================

    $wp_customize->add_section('fhotel_food_lite_footer', array(
        'title'    => esc_html__('Footer', 'fhotel-food-lite'),
        'description' => '',
        'priority' => 37,
    ));

	// Footer design and developed
	 $wp_customize->add_setting('fhotel_food_lite_design', array(
        'default'        => '',
		'sanitize_callback' => 'sanitize_textarea_field'
    ));
 
    $wp_customize->add_control('fhotel_food_lite_design', array(
        'label'      => esc_html__('Design and developed', 'fhotel-food-lite'),
        'section'    => 'fhotel_food_lite_footer',
        'setting'   => 'fhotel_food_lite_design',
		'type'	   =>'textarea'
    ));
	// Footer copyright
	 $wp_customize->add_setting('fhotel_food_lite_copyright', array(
        'default'        => '',
		'sanitize_callback' => 'sanitize_textarea_field'       
    ));
 
    $wp_customize->add_control('fhotel_food_lite_copyright', array(
        'label'      => esc_html__('Copyright', 'fhotel-food-lite'),
        'section'    => 'fhotel_food_lite_footer',
        'setting'   => 'fhotel_food_lite_copyright',
		'type'	   =>'textarea'
    ));	
}
add_action('customize_register', 'fhotel_food_lite_customize_register');

function fhotel_food_lite_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}