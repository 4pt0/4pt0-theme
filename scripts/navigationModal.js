jQuery(document).ready(function($) {
  
  $('.nav_toggle-x').css('display','none');
  //Header Menu  
	$('.header_content-nav_toggle').on('click', function(){
		$('.header_content-links').toggle();
		$('.nav_toggle-bars').toggle();
		$('.nav_toggle-x').toggle();
	});
});