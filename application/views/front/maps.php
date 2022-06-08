<script type="text/javascript">
var types = [ "restaurant" ];
var map, places, infoWindow;
var markers = [];
var autocomplete;
var countryRestrict = {
  'country': 'us'
};
var MARKER_PATH = 'https://developers.google.com/maps/documentation/javascript/images/marker_green';
var MARKER_BASEPATH = 'https://maps.google.com/mapfiles/ms/micons/';
var customIcons = {
  lodging: {
    icon: MARKER_BASEPATH + "red.png"
  },
  restaurant: {
    icon: MARKER_BASEPATH + "green.png"
  },
  stadium: {
    icon: MARKER_BASEPATH + "blue.png"
  }
};
var hostnameRegexp = new RegExp('^https?://.+?/');

var countries = {
  'us': {
    center: {
      lat: 37.1,
      lng: -95.7
    },
    zoom: 3
  },
};
 
 function initMap()
 {
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: countries['us'].zoom,
      center: countries['us'].center
    });

  infoWindow = new google.maps.InfoWindow({
    content: document.getElementById('info-content')
  });
  autocomplete = new google.maps.places.Autocomplete(
    /** @type {!HTMLInputElement} */

    (document.getElementById('autocomplete')), {types: ['(cities)'],
      componentRestrictions: countryRestrict
    });
  places = new google.maps.places.PlacesService(map);

  autocomplete.addListener('place_changed', onPlaceChanged);
   document.getElementById('country').addEventListener(
    'change', setAutocompleteCountry);
}


function customSearch()
{
  map.setCenter(24.413482,54.3483352);
    map.setZoom(12);
    search();

}
 
 customSearch();
// When the user selects a city, get the place details for the city and
// zoom the map in on the city.
function onPlaceChanged() 
{
  var place = autocomplete.getPlace();
  if (place.geometry) {
    alert(place.geometry.location);
    map.panTo(place.geometry.location);
    map.setZoom(15);
    search();
  } else {
    document.getElementById('autocomplete').placeholder = 'Enter a city';
  }
}
 
  // Search for hotels in the selected city, within the viewport of the map.
  function search() {
  var FirstEsecution = true;

  types.forEach(type => {
    var search = {
      bounds: map.getBounds(),
      types: [type]
    };

    places.nearbySearch(search, (function(type) {
      return function(results, status) {

        if (status === google.maps.places.PlacesServiceStatus.OK) {
          console.log("processing " + results.length + " for type=" + type);
          if (FirstEsecution) {
            clearResults();
            clearMarkers();
            FirstEsecution = false;
          }
          // Create a marker for each hotel found, and
          // assign a letter of the alphabetic to each marker icon.

          for (var i = 0; i < results.length; i++) {
            var markerLetter = String.fromCharCode(
              "A".charCodeAt(0) + (i % 26)
            );
            var markerIcon = MARKER_PATH + markerLetter + ".png";
            // Use marker animation to drop the icons incrementally on the map.
            if (!markers[type])
              markers[type] = [];
            markers[type][i] = new google.maps.Marker({
              position: results[i].geometry.location,
              animation: google.maps.Animation.DROP,
              icon: {
                url: customIcons[type].icon,
                labelOrigin: new google.maps.Point(15, 10)
              },
              label: {
                text: markerLetter,
              }
            });
             
            markers[type][i].placeResult = results[i];
            google.maps.event.addListener(
              markers[type][i],
              "click",
              showInfoWindow
            );
            setTimeout(dropMarker(i), i * 100);
            addResult(results[i], i, type);
          }
        } else console.log("no results for " + type + ": " + status)
      };
    })(type))
  });
}

function clearMarkers() {
  for (var j = 0; j < types.length; j++) {
    type = types[j];
    if (markers[type]) {
      for (var i = 0; i < markers[type].length; i++) {
        if (markers[type][i]) {
          markers[type][i].setMap(null);
        }
      }
      markers[type] = [];
    }
  }
}
// Set the country restriction based on user input.
// Also center and zoom the map on the given country.
function setAutocompleteCountry(){
  var country = document.getElementById('country').value;

  if (country == 'all') {
    autocomplete.setComponentRestrictions({
      'country': []
    });
    map.setCenter({
      lat: 15,
      lng: 0
    });
    map.setZoom(2);
  } else {
    autocomplete.setComponentRestrictions({
      'country': country
    });
    map.setCenter(countries[country].center);
    map.setZoom(countries[country].zoom);
  }
  clearResults();
  clearMarkers();
}

function dropMarker(i) {
  return function() {
    for (var j = 0; j < types.length; j++) {
      type = types[j];
      if (markers[type] && markers[type].length > i) {
        console.log("drop " + type + " " + i);
        markers[type][i].setMap(map);
      };
    }
  }
}

function addResult(result, i, type) {
  var results = document.getElementById('results');
  var markerLetter = String.fromCharCode('A'.charCodeAt(0) + (i % 26));
  var markerIcon = MARKER_PATH + markerLetter + '.png';

  var tr = document.createElement('tr');
  tr.style.backgroundColor = (i % 2 === 0 ? '#F0F0F0' : '#FFFFFF');
  tr.onclick = function() {
    google.maps.event.trigger(markers[type][i], 'click');
  };

  var iconTd = document.createElement('td');
  var nameTd = document.createElement('td');
  var icon = document.createElement('img');
  icon.src = markerIcon;
  icon.setAttribute('class', 'placeIcon');
  icon.setAttribute('className', 'placeIcon');
  var name = document.createTextNode(type + ":" + result.name);
  iconTd.appendChild(icon);
  nameTd.appendChild(name);
  tr.appendChild(iconTd);
  tr.appendChild(nameTd);
  results.appendChild(tr);
}

function clearResults() {
  var results = document.getElementById('results');
  while (results.childNodes[0]) {
    results.removeChild(results.childNodes[0]);
  }
}

// Get the place details for a hotel. Show the information in an info window,
// anchored on the marker for the hotel that the user selected.
function showInfoWindow() {
  var marker = this;
  places.getDetails({
      placeId: marker.placeResult.place_id
    },
    function(place, status) {
      if (status !== google.maps.places.PlacesServiceStatus.OK) {
        return;
      }
      infoWindow.open(map, marker);
      buildIWContent(place);
    });
}

// Load the place information into the HTML elements used by the info window.
function buildIWContent(place) {
  document.getElementById('iw-icon').innerHTML = '<img class="hotelIcon" ' +
    'src="' + place.icon + '"/>';
  document.getElementById('iw-url').innerHTML = '<b><a href="' + place.url +
    '">' + place.name + '</a></b>';
  document.getElementById('iw-address').textContent = place.vicinity;
}
</script>
<style type="text/css">
  /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */

#map {
  height: 100%;
}


/* Optional: Makes the sample page fill the window. */

html,
body {
  height: 100%;
  margin: 0;
  padding: 0;
}

body {
  padding: 0 !important;
}

table {
  font-size: 12px;
}

.hotel-search {
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  background: #fff;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  left: 0;
  position: absolute;
  top: 0;
  width: 440px;
  z-index: 1;
}

#map {
  margin-top: 40px;
  width: 440px;
}

#listing {
  position: absolute;
  width: 200px;
  height: 470px;
  overflow: auto;
  left: 442px;
  top: 0px;
  cursor: pointer;
  overflow-x: hidden;
}

#findhotels {
  font-size: 14px;
}

#locationField {
  -webkit-box-flex: 1 1 190px;
  -ms-flex: 1 1 190px;
  flex: 1 1 190px;
  margin: 0 8px;
}

#controls {
  -webkit-box-flex: 1 1 140px;
  -ms-flex: 1 1 140px;
  flex: 1 1 140px;
}

#autocomplete {
  width: 100%;
}

#country {
  width: 100%;
}

.placeIcon {
  width: 20px;
  height: 34px;
  margin: 4px;
}

.hotelIcon {
  width: 24px;
  height: 24px;
}

#resultsTable {
  border-collapse: collapse;
  width: 240px;
}

#rating {
  font-size: 13px;
  font-family: Arial Unicode MS;
}

.iw_table_row {
  height: 18px;
}

.iw_attribute_name {
  font-weight: bold;
  text-align: right;
}

.iw_table_icon {
  text-align: right;
}
</style>


<div class="hotel-search">
  <div id="findhotels">
    Find hotels in:
  </div>

  <div id="locationField">
    <input id="autocomplete" placeholder="Enter a city" type="text" value="Nebraska City, NE" />
  </div>

  <div id="controls">
    <select id="country">
      <option value="all">All</option>
      <option value="au">Australia</option>
      <option value="br">Brazil</option>
      <option value="ca">Canada</option>
      <option value="fr">France</option>
      <option value="de">Germany</option>
      <option value="mx">Mexico</option>
      <option value="nz">New Zealand</option>
      <option value="it">Italy</option>
      <option value="za">South Africa</option>
      <option value="es">Spain</option>
      <option value="pt">Portugal</option>
      <option value="us" selected>U.S.A.</option>
      <option value="uk">United Kingdom</option>
    </select>
  </div>
</div>

<div id="map"></div>

<div id="listing">
  <table id="resultsTable">
    <tbody id="results"></tbody>
  </table>
</div>

<div style="display: none">
  <div id="info-content">
    <table>
      <tr id="iw-url-row" class="iw_table_row">
        <td id="iw-icon" class="iw_table_icon"></td>
        <td id="iw-url"></td>
      </tr>
      <tr id="iw-address-row" class="iw_table_row">
        <td class="iw_attribute_name">Address:</td>
        <td id="iw-address"></td>
      </tr>
    </table>
  </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvghjFMkr-wHP0DxCaROqVO5_v3LM9-FA&libraries=places&callback=initMap" async defer></script>


