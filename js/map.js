jQuery(function ($) {

  var maps = [],
    mapStyles = [
      {
          "stylers": [
              {
                  "saturation": -100
              }
          ]
      },
      {
          "featureType": "water",
          "elementType": "geometry.fill",
          "stylers": [
              {
                  "color": "#0099dd"
              }
          ]
      },
      {
          "elementType": "labels",
          "stylers": [
              {
                  "visibility": "off"
              }
          ]
      },
      {
          "featureType": "poi.park",
          "elementType": "geometry.fill",
          "stylers": [
              {
                  "color": "#aadd55"
              }
          ]
      },
      {
          "featureType": "road.highway",
          "elementType": "labels",
          "stylers": [
              {
                  "visibility": "on"
              }
          ]
      },
      {
          "featureType": "road.arterial",
          "elementType": "labels.text",
          "stylers": [
              {
                  "visibility": "on"
              }
          ]
      },
      {
          "featureType": "road.local",
          "elementType": "labels.text",
          "stylers": [
              {
                  "visibility": "on"
              }
          ]
      },
      {}
  ],
    ibOptions = {
      alignBottom: true,
      content: 'text',
      pixelOffset: new google.maps.Size(-85, -48),
      boxStyle: {
        width: "168px"
      },
      closeBoxMargin: "5px 5px 5px 5px",
      closeBoxURL: 'img/icon-close.png'
    },
    ib = new InfoBox(ibOptions);

  function Map(id, mapOptions) {
    this.map = new google.maps.Map(document.getElementById(id), mapOptions);
    this.markers = [];
    this.infowindows = [];
    this.clusters = null;
  }

  function addMarker(mapId, location, index, string, image) {
    maps[mapId].markers[index] = new google.maps.Marker({
      position: location,
      map: maps[mapId].map,
      icon: {
        url: image
      }
    });

    var content = '<div class="info-box">' + string + '</div>';

    google.maps.event.addListener(maps[mapId].markers[index], 'click', function () {
      ib.setContent(content);
      ib.setPosition(location);
      ib.open(maps[mapId].map);
    });


  }


  function initialize(mapInst) {

    var lat = mapInst.attr("data-lat"),
      lng = mapInst.attr("data-lng"),
      myLatlng = new google.maps.LatLng(lat, lng),
      setZoom = parseInt(mapInst.attr("data-zoom")),
      mapId = mapInst.attr('id');

    var mapOptions = {
      zoom: setZoom,
      disableDefaultUI: true,
      scrollwheel: false,
      zoomControl: false,
      zoomControlOptions: {
        style: google.maps.ZoomControlStyle.LARGE,
        position: google.maps.ControlPosition.RIGHT_BOTTOM
      },
      streetViewControl: false,
      streetViewControlOptions: {
        position: google.maps.ControlPosition.LEFT_BOTTOM
      },
      fullscreenControl: false,
      center: myLatlng,
      styles: mapStyles
    };

    maps[mapId] = new Map(mapId, mapOptions);

    $('.marker[data-rel="' + mapId + '"]').each(function (i, el) {
      addMarker(
        mapId,
        new google.maps.LatLng(
          $(this).attr("data-lat"),
          $(this).attr("data-lng")
        ),
        i,
        $(this).attr("data-string"),
        ($(window).width() < 768) ? $(this).data('image-mobile') : $(this).data('image')
      );
    });



  }

  $('.map').each(function () {
    initialize($(this));
  });

});