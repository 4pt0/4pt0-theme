<?php

//Register Custumizer, Sections, Settings and Controls
function theme_customizer_register( $wp_customize ) {
  
  //Add Customizer Section 
  $wp_customize->add_section( 'header_action', array(
      'title' => __('Header Action'),
      'description' => __('Add a button in the header.'),
      'priority' => 35,
    )
  );
  $wp_customize->add_section( 'footer_action', array(
      'title' => __('Footer Action'),
      'description' => __('Add a link in the footer.'),
      'priority' => 35,
    )
  );

  //Add Customizer Settings 
  $wp_customize->add_setting( 'header_action_text');
  $wp_customize->add_setting( 'header_action_url');
  $wp_customize->add_setting( 'footer_action_text');
  $wp_customize->add_setting( 'footer_action_url');
  
  //Add Customizer Controls   
  $wp_customize->add_control( 'header_action_text',
    array(
      'label' => 'Header Action Text',
      'section' => 'header_action',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 'header_action_url',
    array(
      'label' => 'Header Action URL',
      'section' => 'header_action',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 'footer_action_text',
    array(
      'label' => 'Footer Action Text',
      'section' => 'footer_action',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 'footer_action_url',
    array(
      'label' => 'Footer Action URL',
      'section' => 'footer_action',
      'type' => 'text',
    )
  );

}
add_action( 'customize_register', 'theme_customizer_register' ); 

?>