<?php
  
//Add Google API 
function my_acf_google_map_api( $api ){
	$api['key'] = 'AIzaSyBekoSVXQxTDFrLifAGwzl80VllFSsZa14';
	return $api;	
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
?>