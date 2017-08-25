(function( $ ) {
	$.fn.userMap = function(users, templateDirectoryURI) {
          
    //Intialzize Map
    map = new google.maps.Map(this.get(0), {
      zoom: 5,
      minZoom: 5,
      scrollwheel: false,
      streetViewControl: false,
      center: {lat: 32.8320981, lng: -89.1752648},
      mapTypeId: 'Watercolor',
      mapTypeControlOptions: {
        mapTypeIds: ['']
      }
    });      
    
    //Watercolor Tiles      
    map.mapTypes.set('Watercolor', new google.maps.StamenMapType('watercolor'));

    //Set Data

    //Set Markers    
    var richMarkers = users.map(function(user, i) {
      return marker = new RichMarker({
  			position: new google.maps.LatLng( user.location),
  			map: map,
  			content: '<a style="border-radius: 50%; overflow:hidden; display:block; border:20px solid white" href="'+user.url+'" class="richmarker-wrapper"><img src="'+user.avatar+'"></a>',
  			shadow: 0
  		});
    });

    // Add a marker clusterer to manage the markers.
    var markerCluster = new MarkerClusterer(map, richMarkers, {
      gridSize: 112,
      styles: [{
        textColor: 'white',
        url: templateDirectoryURI+'/images/map-cluster1.png',
        height: 112,
        width: 112,
        textSize: 40
      }]

    });
	google.maps.event.addListenerOnce(map, 'idle', function() {
   google.maps.event.trigger(map, 'resize');
	});
  };
})(jQuery);     