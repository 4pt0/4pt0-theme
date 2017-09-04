<?php

//Register Customizer Sections, Settings and Controls
function theme_customizer_register( $wp_customize ) {
  
  //Removed Unused Areas
  $wp_customize->remove_section( 'static_front_page' );

  //Add Customizer Sections
  $wp_customize->add_section( 'footer_content', array(
      'title' => __('Footer Content'),
      'description' => __('Add social links and other content.'),
      'priority' => 35,
    )
  );
  $wp_customize->add_section( 'archive_settings', array(
      'title' => __('Archive Settings'),
      'description' => __('Update content on archives.'),
      'priority' => 36,
    )
  );

  //Add Customizer Settings 
  $wp_customize->add_setting( 'theme_facebook_url' );
  $wp_customize->add_setting( 'theme_twitter_url' );
  $wp_customize->add_setting( 'theme_instagram_url' );
  $wp_customize->add_setting( 'theme_pinterest_url' );
  $wp_customize->add_setting( 'theme_youtube_url' );
  $wp_customize->add_setting( 'theme_medium_url' );
  $wp_customize->add_setting( 'theme_footer_text' );
  $wp_customize->add_setting( 'theme_post_archive_title' );
  $wp_customize->add_setting( 'theme_post_archive_body' );
  $wp_customize->add_setting( 'theme_post_archive_background' );
  $wp_customize->add_setting( 'theme_post_archive_inverted' );
  $wp_customize->add_setting( 'theme_logo' );
  $wp_customize->add_setting( 'theme_alternate_logo' );
  
  //Add Customizer Controls   
  $wp_customize->add_control( 'theme_facebook_url',
    array(
      'label' => 'Facebook URL',
      'section' => 'footer_content',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 'theme_twitter_url',
    array(
      'label' => 'Twitter URL',
      'section' => 'footer_content',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 'theme_instagram_url',
    array(
      'label' => 'Instagram URL',
      'section' => 'footer_content',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 'theme_pinterest_url',
    array(
      'label' => 'Pinterest URL',
      'section' => 'footer_content',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 'theme_medium_url',
    array(
      'label' => 'Medium URL',
      'section' => 'footer_content',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 'theme_youtube_url',
    array(
      'label' => 'YouTube URL',
      'section' => 'footer_content',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 'theme_footer_text',
    array(
      'label' => 'Footer Credit',
      'section' => 'footer_content',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 'theme_post_archive_title',
    array(
      'label' => 'Post Archive Title',
      'section' => 'archive_settings',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 'theme_post_archive_body',
    array(
      'label' => 'Post Archive Body',
      'section' => 'archive_settings',
      'type' => 'textarea',
    )
  );
  $wp_customize->add_control( 'theme_post_archive_inverted',
    array(
      'section'   => 'archive_settings',
      'label'     => 'Invert callout text.',
      'type'      => 'checkbox'
    )
  );
  $wp_customize->add_control( 
    new WP_Customize_Media_Control( $wp_customize, 'theme_post_archive_background',
      array(
        'label' => 'Post Archive Callout Background',
        'section' => 'archive_settings',
        'setting' => 'theme_post_archive_background',
      )
    )
  );     
  $wp_customize->add_control( 
    new WP_Customize_Media_Control( $wp_customize, 'theme_logo',
      array(
        'label' => 'Logo',
        'section' => 'title_tagline',
        'settings' => 'theme_logo',
      ) 
    ) 
  );
  $wp_customize->add_control( 
    new WP_Customize_Media_Control( $wp_customize, 'theme_alternate_logo',
      array(
        'label' => 'Alternate Logo',
        'section' => 'title_tagline',
        'settings' => 'theme_alternate_logo',
      ) 
    ) 
  );
}
add_action( 'customize_register', 'theme_customizer_register' ); 
?>