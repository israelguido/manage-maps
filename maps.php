<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Geocoding service</title>
      <style>
          html, body {
              height: 100%;
              margin: 0px;
              padding: 0px
          }

          #map-canvas {
              height: 254px;
              width: 254px;
          }

          #panel {
              position: absolute;
              top: 5px;
              left: 50%;
              margin-left: -180px;
              z-index: 5;
              background-color: #fff;
              padding: 5px;
              border: 1px solid #999;
          }
      </style>
      <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
      <script>
          var geocoder;
          var map;
          function initialize() {
              geocoder = new google.maps.Geocoder();
              var latlng = new google.maps.LatLng(-23.6824124, -46.5952992);
              var mapOptions = {
                  zoom: 5,
                  center: latlng
              }
              map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
          }

          function codeAddress() {
              // var address = document.getElementById('address').value;
              var address = ['Porra, São Paulo', 'Rio de Janeiro', 'Paraná'];

              for (var i = 0; i < address.length; i++) {
                  geocoder.geocode({ 'address': address[i]}, function (results, status) {
                      if (status == google.maps.GeocoderStatus.OK) {
                          map.setCenter(results[0].geometry.location);

                          var marker = new google.maps.Marker({
                              map: map,
                              position: results[0].geometry.location,
                              title: results[0].formatted_address
                          });
                          google.maps.event.addListener(marker, 'click', function () {
                              console.log(results[0].formatted_address)
                          });
                      } else {
                          alert('Geocode was not successful for the following reason: ' + status);
                      }
                  });
              }
          }

          google.maps.event.addDomListener(window, 'load', initialize);

      </script>
  </head>
  <body onload="codeAddress()">
    <!-- <div id="panel">
      <input id="address" type="textbox" value="São Paulo, Brazil">
      <input type="button" value="Geocode">
    </div> -->
    <div id="map-canvas"></div>
  </body>
</html>