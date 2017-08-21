jQuery(document).ready(function($) {

  //Header Menu  
	$('.header_content-nav_toggle').on('click', function(){
		$('.menu-item').each(function (i) {

      // store the item around for use in the 'timeout' function
      var $item = $(this); 
  
      // execute this function sometime later:
      setTimeout(function() { 
        $item.slideToggle(150);
      }, 100*i);
    
    });
	});
});