jQuery(document).ready(function($) { 
	
// 	<i class="fa fa-chevron-left" aria-hidden="true"></i>


  $( ".slideshow-slide" ).wrapAll( "<div class='slidershow-wrapperjs' />" );

	$('.slidershow-wrapperjs').css({ width: slideWidth, height: slideHeight });
	
	var slide = '.media-slideshow.slidershow-wrapperjs.slideshow-slide';
	var slideCount = $(slide).length;
	var slideWidth = $(".slideshow-slide").width();
	var slideHeight = $(".slideshow-slide").height();
	var sliderUlWidth = slideCount * slideWidth;

// 	$(".slideshow-slide").css({ width: sliderUlWidth, marginLeft: - slideWidth });
		
	$('.slideshow-previous').click(function (e) {
		e.preventDefault();
    $('.slidershow-wrapperjs').animate({
      left: + $('.slideshow-slide').width()
    }, 200, function () {
    	$('.slideshow-slide:last-child').prependTo('.slidershow-wrapperjs');
      $('.slidershow-wrapperjs').css('left', '');
    });
  });

  $('.slideshow-next').click(function (e) {
	  e.preventDefault();
    moveRight();
    $('.slidershow-wrapperjs.slideshow-slide:first-child').appendTo('.slidershow-wrapperjs');
  });

    function moveRight() {
        $('.slidershow-wrapperjs').animate({
            left: - $('.slideshow-slide').width()
        }, 200, function () {
          $('.slideshow-slide:first-child').appendTo('.slidershow-wrapperjs');
          $('.slidershow-wrapperjs').css('left', '');
        });
    };


});