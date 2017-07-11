<div id="map" style="width:500px; height: 400px;"></div>

<script type="text/javascript">
  
  (function( $ ) {
  
        
    //Intialzize Map
    map = new google.maps.Map($("#map").get(0), {
      zoom: 3,
      center: {lat: -28.024, lng: 140.887},
      mapTypeId: 'Watercolor',
      mapTypeControlOptions: {
        mapTypeIds: ['']
      }
    });      
    
    //Watercolor Tiles      
    map.mapTypes.set('Watercolor', new google.maps.StamenMapType('watercolor'));

    //Set Data
    var users = [
      {location: { lat: -31.563910, lng: 147.154312}, avatar: 'http://blakes-macbook-pro-5.local:5757/wp-content/uploads/2017/05/3.jpg', url:'http://1.com', name:'Hello' },
      {location: { lat: -31.718234, lng: 150.363181}, avatar: 'https://maps.google.com/mapfiles/kml/shapes/library_maps.png', url:'http://2.com', name:'World' }
    ]

    //Set Markers    
    var richMarkers = users.map(function(user, i) {
      return marker = new RichMarker({
  			position: new google.maps.LatLng( user.location),
  			map: map,
  			content: '<a style="border-radius: 50%; overflow:hidden; display:block; border:" href="'+user.url+'" class="richmarker-wrapper"><img src="'+user.avatar+'"></a>',
  			shadow: 0
  		});
    });
      
    // Add a marker clusterer to manage the markers.
    var markerCluster = new MarkerClusterer(map, richMarkers, {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});

  })(jQuery);     
  
</script>
