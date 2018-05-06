<?php

// Add Custom Theme Customizer Options

function sbtheme_customize_register( $wp_customize ) {

    // remove sections
    $wp_customize->remove_control( 'blogdescription');

    // Site Identity
    $wp_customize->add_setting( 'identity_phone' , array(
        'default'   => '902-225-5647',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_setting( 'identity_email' , array(
        'default'   => 'info@sbpropertymaintenance.ca',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_setting( 'identity_footer_logo');

    $wp_customize->add_control( 
        'identity_phone_control', 
        array(
        'label'    => __( 'Phone', 'sbtheme' ),
        'section'  => 'title_tagline',
        'settings' => 'identity_phone',
        'type'     => 'tel',
        'priority' => 2
        )
    );

    $wp_customize->add_control( 
        'identity_email_control', 
        array(
        'label'    => __( 'Email', 'sbtheme' ),
        'section'  => 'title_tagline',
        'settings' => 'identity_email',
        'type'     => 'tel',
        'priority' => 3
        )
    );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
        'label'    => __( 'Footer Logo', 'sbtheme' ),
        'section'  => 'title_tagline',
        'settings' => 'identity_footer_logo',
    ) ) );

    //All our sections, settings, and controls will be added here
    $wp_customize->add_setting( 'header_slogan' , array(
        'default'   => 'THE COMPLETE PROPERTY MAINTENANCE SOLUTION',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_setting( 'header_subtext' , array(
        'default'   => 'We can bring your property to life!',
        'transport' => 'refresh',
    ) );
    
    $wp_customize->add_control( 
        'header_slogan_control', 
        array(
        'label'    => __( 'Slogan', 'sbtheme' ),
        'section'  => 'header_image',
        'settings' => 'header_slogan',
        'type'     => 'text',
        'priority' => 1
        )
    );

    $wp_customize->add_control( 
        'header_subtext_control', 
        array(
        'label'    => __( 'Header Subtext', 'sbtheme' ),
        'section'  => 'header_image',
        'settings' => 'header_subtext',
        'type'     => 'text',
        'priority' => 2
        )
    );
}