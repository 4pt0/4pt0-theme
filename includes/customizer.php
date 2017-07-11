<?php

//Register Custumizer, Sections, Settings and Controls
function theme_customizer_register( $wp_customize ) {
  
  //Removed Unused Areas
//   $wp_customize->remove_section( 'static_front_page' );

  //Add Customizer Section 
/*
  $wp_customize->add_section( 'theme_social_links', array(
      'title' => __('Social Links'),
      'description' => __('Add social links to the header.'),
      'priority' => 35,
    )
  );
*/

  //Add Customizer Settings 
/*
  $wp_customize->add_setting( 'theme_facebook_url');
  $wp_customize->add_setting( 'theme_twitter_url');
  $wp_customize->add_setting( 'theme_newsletter_url');
*/
  
  //Add Customizer Controls   
/*
  $wp_customize->add_control( 'theme_facebook_url',
    array(
      'label' => 'Facebook URL',
      'section' => 'theme_social_links',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 'theme_twitter_url',
    array(
      'label' => 'Twitter URL',
      'section' => 'theme_social_links',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 'theme_newsletter_url',
    array(
      'label' => 'Newsletter URL',
      'section' => 'theme_social_links',
      'type' => 'text',
    )
  );
*/
}
add_action( 'customize_register', 'theme_customizer_register' ); 

?>