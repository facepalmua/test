jQuery(document).ready(function($) {

  //get current position
  if($('.location-city').length){
    navigator.geolocation.getCurrentPosition(
      function(position){
        var geocoder = new google.maps.Geocoder;
        var latlng = {lat: position.coords.latitude, lng: position.coords.longitude};
          geocoder.geocode({'location': latlng}, function(results, status) {
          let city = results[0].address_components[3].short_name;
					console.log('city ', city);
					console.log('city ', results);
        });
      }
    );
  }

});