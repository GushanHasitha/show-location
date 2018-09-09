@extends('master')

@section('content')

    <div class="container">
        <h3>View All Locations</h3>
    
        <div id="map">
       
        </div>
    
    </div>

    <script>
    function initMap(){

        var map = new google.maps.Map(document.getElementById('map'), {
       
          center: { lat: 7.8731, lng: 80.7718 },
          scrollwheel: false,
          zoom: 7.25
      });
      
        setMarkers(); 
    
      
      function setMarkers(){
        
        var features = [];
        var icon = {
          url: "{{URL::asset('/assets/images/icon.png')}}", // url for the icon
          scaledSize: new google.maps.Size(50, 50), // scaled size
        };
        
        
        //get all locations 
        <?php
			  foreach ($results as $item) {
		    ?>
  				features.push({position: new google.maps.LatLng(<?php echo $item->latitude; ?>, <?php echo $item->longitude; ?>)});
  		  <?php }?>

        // Create markers.
        features.forEach(function(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
            icon: icon,
            map: map
          });
        });
        
      }
    }
    
    </script>
    
@endsection