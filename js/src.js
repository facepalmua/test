jQuery(document).ready(function($) {

  //get current position
  if($('.location-city').length){
    navigator.geolocation.getCurrentPosition(
      function(position){
        let geocoder = new google.maps.Geocoder;
        let latlng = {lat: position.coords.latitude, lng: position.coords.longitude};

        geocoder.geocode({'location': latlng}, function(results, status) {

          let checkTypeCity = 'locality';

          for(let i = 0; i < results.length; i++){
            for(let j = 0; j < results[i].address_components.length; j++){

              let searchResult = results[i].address_components[j].types[0]

              if(searchResult == checkTypeCity){
                let setNameCity = results[i].address_components[j].short_name
                $('.location-city').find('b').html('м. ' + setNameCity)
              }

            }
          }

        });
      }
    );
  }

});