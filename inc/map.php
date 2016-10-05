<div id="map"></div>
 <script>
   var map;
   function initMap() {

     map = new google.maps.Map(document.getElementById('map'), {
       center: {lat: 53.349248, lng: -6.269056},
       zoom: 8,
       scrollwheel:  false
     });

     var styleArray = [
        {
          featureType: "all",
          stylers: [
            { saturation: -100 }
          ]
        }
     ];

     var styledMap = new google.maps.StyledMapType(styleArray,{name: "Styled Map"});

     var image = 'assets/img/pin.png';
     var beachMarker = new google.maps.Marker({
       position: {lat: 53.349248, lng: -6.269056},
       map: map,
       icon: image
     });
     map.mapTypes.set('map_style', styledMap);
     map.setMapTypeId('map_style');
   }
 </script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbKJfNrWANg9A4vOnclek4vg4Y23woSfA&callback=initMap" async defer></script>
