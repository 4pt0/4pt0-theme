jQuery(document).ready(function($) {

//Update .image-the_image to fit on IE
if ( ! Modernizr.objectfit ) {
  $('.image-the_image').parent().each(function () {
    var $container = $(this),
        imgUrl = $container.find('img').prop('src');
    if (imgUrl) {
      $container
        .css('backgroundImage', 'url(' + imgUrl + ')')
        .addClass('ie_scaled-image');
    }  
  });
}

});