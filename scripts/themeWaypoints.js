jQuery(document).ready(function($) {
	
	function waypointFunc (name,offset,animate) {
		$(name).addClass('animated');
		$(name).css('opacity', 0);
		$(name).waypoint(function() {
	    $(name).addClass(animate);
	  }, { offset: offset });
  }
  waypointFunc ('.masthead-content','50%','fadeInUp');
  waypointFunc ('.loop_content-page_title','50%','fadeIn');
  waypointFunc ('.standard_content-newsletter_singup','80%','fadeIn');
  waypointFunc ('.header-title','80%','fadeInLeft');
  waypointFunc ('.options-map_toggle','92%','fadeInUp');
  waypointFunc ('.options-filter','92%','fadeInUp');
	waypointFunc ('.content-avatar','60%','fadeIn');
	waypointFunc ('.user_meta-name','70%','fadeInDown');
	waypointFunc ('.user_meta-title','70%','fadeInDown');
	waypointFunc ('.user_meta-tags','74%','fadeInUp');
	waypointFunc ('.quote-body','80%','fadeIn');
	waypointFunc ('.bio-title','87%','fadeInDown');
	waypointFunc ('.bio-body','87%','fadeIn');
	waypointFunc ('.content-heading','87%','fadeInDown');
	waypointFunc ('.content-title','87%','fadeInDown');
	waypointFunc ('.content-body','87%','fadeIn');
	waypointFunc ('.content-url','84%','fadeInUp');
	waypointFunc ('.contact-title','87%','fadeInDown');
	waypointFunc ('.links-website','87%','fadeIn');
	waypointFunc ('.social_media-link','87%','fadeIn');
	waypointFunc ('.posts-pretext','90%','fadeInLeft');
  $('.standard_content-segment_title').addClass('animated');
		$('.standard_content-segment_title').css('opacity', 0);
		$('.standard_content-segment_body').addClass('animated');
		$('.standard_content-segment_body').css('opacity', 0);
		$('.blocks-page').addClass('animated');
		$('.blocks-page').css('opacity', 0);
		$('.blocks-alumni_quote').addClass('animated');
		$('.blocks-alumni_quote').css('opacity', 0);
		$('.blocks-link').addClass('animated');
		$('.blocks-link').css('opacity', 0);
		$('.posts-single_post').addClass('animated');
		$('.posts-single_post').css('opacity', 0);
  	
  var itemQueue = []
  var delay = 200
  var queueTimer
  
  function processItemQueue () {
    if (queueTimer) return // We're already processing the queue
		queueTimer = window.setInterval(function () {
      if (itemQueue.length) {
        $(itemQueue.shift()).addClass('fadeIn');
        processItemQueue()
      }
      else {
        window.clearInterval(queueTimer)
        queueTimer = null
      }
    }, delay)
  }
  $(".standard_content-segment_title").waypoint(function () {
    itemQueue.push(this.element)
    processItemQueue()
  }, {
    offset: '90%'
  });
	$(".standard_content-segment_body").waypoint(function () {
    itemQueue.push(this.element)
    processItemQueue()
  }, {
    offset: '90%'
  });  
  $(".blocks-page").waypoint(function () {
    itemQueue.push(this.element)
    processItemQueue()
  }, {
    offset: '90%'
  });  
	$(".blocks-alumni_quote").waypoint(function () {
    itemQueue.push(this.element)
    processItemQueue()
  }, {
    offset: '90%'
  });
  $(".blocks-link").waypoint(function () {
    itemQueue.push(this.element)
    processItemQueue()
  }, {
    offset: '90%'
  });
	$(".posts-single_post").waypoint(function () {
    itemQueue.push(this.element)
    processItemQueue()
  }, {
    offset: '90%'
  });


      
});     