<?php
  
//Add Custom Formats to TinyMCE
function theme_mce_formats($buttons) {
	array_unshift($buttons, 'styleselect');
	return $buttons;
}
add_filter('mce_buttons_2', 'theme_mce_formats');
 
function theme_mce_before_init_insert_formats( $init_array ) {  

  // Define the style_formats array
	$style_formats = array(  
  	
		// Each array child is a format with it's own settings
		array(  
			'title' => 'Inline Link',  
			'block' => 'a',  
			'classes' => 'include-inline_link'
		),
	);  
	
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );  
	return $init_array;  
  
} 
add_filter( 'tiny_mce_before_init', 'theme_mce_before_init_insert_formats' ); 

//Style Custom Formats in TinyMCE Editor
function theme_theme_add_editor_styles() {
  add_editor_style( 'style-tinymce.css' );
}
add_action( 'init', 'theme_theme_add_editor_styles' );

?>