<!--Location  Google Map Modal Start-->
<div class="themeModal hidden" id="LocationMapModal1">
    <div class="themeModalCon">
        <div class="row">
		
			<!-- col-12-->
            <div class="col-sm-12">
                <span class="themeModalBtnClose" >x</span>
            </div>
			<!--// col-12-->
			<!-- col-12-->
			<div class="col-sm-12">
               
                <h5 class="text-center" > <i class="fa fa-puzzle-piece" aria-hidden="true"></i> 
                Choose On Map</h5>
                 
			</div>
			<!--// col-12-->
		</div>
		 
        <div class="row">
            <div id="previewFloorPlan">
            	 <div id="map" style="height: 300px;border: 1px solid #000;"></div>
                 <input type="text" readonly name="prop_lat" id="prop_lat" class="prop_lat"   value="<?php  echo (isset($PropertyData->prop_lat) && $PropertyData->prop_lat !== '') ? ($PropertyData->prop_lat) : '';?>"  />
                 <input type="text"  readonly  name="prop_lng" id="prop_lng" class="prop_lng" value="<?php  echo (isset($PropertyData->prop_lng) && $PropertyData->prop_lng !== '') ? ($PropertyData->prop_lng) : '';?>"  />

                 <?php
                    if(isset($PropertyData->prop_lng) && $PropertyData->prop_lng !=='')
                    {
                        $propeerty_location = $PropertyData->location;
                         $latlang = $PropertyData->prop_lat.", ".$PropertyData->prop_lng;
                     }else
                     {
                         $propeerty_location  ='';
                            $latlang  = '25.0867979, 55.1453625';
                     }


                     

                 ?>
            </div>
        </div> 
        <div class="row">
			<!--// col-12-->
			<!-- col-12-->
            <div class="col-sm-12 mt-4">
                <div class="form-group pull-right">&nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-rc  BtnClose" id="doneBtnFeature">Done</button>&nbsp;&nbsp;&nbsp;  
                </div>    
            </div>
            <!--// col-12-->
        </div>
    </div>    
</div>
<script type="text/javascript">
	$(document).ready(function(){
		
	});
</script> 

<script type="text/javascript">
    
jQuery(function($){
    initialize();
    var latlng, map, marker,
        div = $('<div>');

    function initialize(){
        latlng = new google.maps.LatLng(<?=$latlang?>);
        map = new google.maps.Map(document.getElementById('map'), {
            center: latlng,
            zoom: 10,
            mapTypeControl:false,
            streetViewControl:false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
          const geocoder = new google.maps.Geocoder();
        
        new google.maps.Marker({
          position: latlng,
          map,
          title: "<?=$propeerty_location?>",
        });

        google.maps.event.addListener(map, 'click', function(event) {
            placeMarker(event.latLng,geocoder, map);
             
            
        });

    }

    function placeMarker(location,geocoder, map) {
        console.log(location);
        if ( marker ) {
            marker.setPosition(location);
        } else {
            marker = new google.maps.Marker({
                position: location,
                map: map,
                title: 'Set lat/lon values for this property',
                draggable: true
            });
            google.maps.event.addListener(marker, 'dragend', function(a) {
            document.getElementById('prop_lat').value = location.lat().toFixed(8);
            document.getElementById('prop_lng').value = location.lng().toFixed(8);

        });
        }
        
        
        document.getElementById('prop_lat').value = location.lat().toFixed(8);
        document.getElementById('prop_lng').value = location.lng().toFixed(8); 
        


         const prop_lat = document.getElementById("prop_lat").value;
        const prop_lng = document.getElementById("prop_lng").value;
       
        const latlng = {
          lat: parseFloat(prop_lat),
          lng: parseFloat(prop_lng),
        };


        geocoder.geocode({ location: latlng }, (results, status) => {
             
          if (status === "OK") {
            if (results[0]) {
                var get_address = results[0].formatted_address;
               
              
              document.getElementById("location").value = get_address;

            } else {
              window.alert("No results found");
            }
          } else {
            window.alert("Geocoder failed due to: " + status);
          }
        });

/*
        const prop_lat = document.getElementById("prop_lat").value;
        const prop_lng = document.getElementById("prop_lng").value;
       
        const latlng = {
          lat: parseFloat(prop_lat),
          lng: parseFloat(prop_lng),
        };
        geocoder.geocode({ location: latlng }, (results, status) => {
             alert(status);
          if (status === "OK") {
            if (results[0]) {
              map.setZoom(15);
              const marker = new google.maps.Marker({
                position: latlng,
                map: map,
              }); 
              var get_address = results[0].formatted_address;
               
              
              document.getElementById("location").value = get_address;

            } else {
              window.alert("No results found");
            }
          } else {
            window.alert("Geocoder failed due to: " + status);
          }
        });*/
        
       /* div.html(location.lat().toFixed(4) + ', ' + location.lng().toFixed(4)).clone().appendTo('body');*/
    }
     
});



</script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvghjFMkr-wHP0DxCaROqVO5_v3LM9-FA&libraries=places&callback=initialize" ></script>
 
<!--Location  Google Map Modal End-->