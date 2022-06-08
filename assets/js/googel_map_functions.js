// OTHER FUNCTIONS ############################################################## 
// When the user selects a city, get the place details for the city and
// zoom the map in on the city.
function onPlaceChanged() {
  var place = autocomplete.getPlace();
  if (place.geometry) {
    map.panTo(place.geometry.location);
    map.setZoom(15);
    search();
  } else {
    document.getElementById('autocomplete').placeholder = 'Enter a city';
  }
}


// Search for hotels in the selected city, within the viewport of the map.
function search(tabtype) {
  var FirstEsecution = true;
 
  
   
  if(tabtype=='school')
  {
	  var types = ["school"];
	  
  }else if(tabtype=='restaurant')
  {
	  var types = ["restaurant"];
  }else if(tabtype=='hospital')
  {
	  var types = ["hospital"];
  }else if(tabtype=='park')
  {
	  var types = ["park"];
  }else 
  {
	  var types = ["school", "restaurant", "hospital", "park"];
  }
	
	
 
 
  types.forEach(type => {
    var search = {
      bounds: map.getBounds(),
      types: [type],
	  geometry:countries['us'].center
    };
	
	tabtype = type;
	places.nearbySearch(search, (function(type) {
      return function(results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
          //console.log("processing " + results.length + " for type=" + type);
          if (FirstEsecution) {
            clearResults(tabtype);
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
            // If the user clicks a hotel marker, show the details of that hotel
            // in an info window.
            markers[type][i].placeResult = results[i];
            google.maps.event.addListener(
              markers[type][i],
              "click",
              showInfoWindow
            );
            setTimeout(dropMarker(i), i * 100);
            addResult(results[i], i, type,tabtype);
          }
        }
      };
    })(type))
  })
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
function setAutocompleteCountry() {
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
  clearResults(tabtype);
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

function addResult(result, i, type,tabtype=null) {
	 
  var results = document.getElementById('results'+tabtype);
  var markerLetter = String.fromCharCode('A'.charCodeAt(0) + (i % 26));
  // var markerIcon = MARKER_PATH + markerLetter + '.png';
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

function clearResults(tabtype=null) {
  var results = document.getElementById('results'+tabtype);
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

  if (place.formatted_phone_number) {
    document.getElementById('iw-phone-row').style.display = '';
    document.getElementById('iw-phone').textContent =
      place.formatted_phone_number;
  } else {
    document.getElementById('iw-phone-row').style.display = 'none';
  }

  // Assign a five-star rating to the hotel, using a black star ('&#10029;')
  // to indicate the rating the hotel has earned, and a white star ('&#10025;')
  // for the rating points not achieved.
  if (place.rating) {
    var ratingHtml = '';
    for (var i = 0; i < 5; i++) {
      if (place.rating < (i + 0.5)) {
        ratingHtml += '&#10025;';
      } else {
        ratingHtml += '&#10029;';
      }
      document.getElementById('iw-rating-row').style.display = '';
      document.getElementById('iw-rating').innerHTML = ratingHtml;
    }
  } else {
    document.getElementById('iw-rating-row').style.display = 'none';
  }

  // The regexp isolates the first part of the URL (domain plus subdomain)
  // to give a short URL for displaying in the info window.
  if (place.website) {
    var fullUrl = place.website;
    var website = hostnameRegexp.exec(place.website);
    if (website === null) {
      website = 'http://' + place.website + '/';
      fullUrl = website;
    }
    document.getElementById('iw-website-row').style.display = '';
    document.getElementById('iw-website').textContent = website;
  } else {
    document.getElementById('iw-website-row').style.display = 'none';
  }
}

  function codeAddress(address) {
  
    geocoder.geocode( { 'address': address}, function(results, status) {
		  
		 countries['us'].center=results[0].geometry.location;
      if (status == 'OK') {
        map.setCenter(results[0].geometry.location);
         
		 
		 
        var marker = new google.maps.Marker({
            map: map,
            position: results[0].geometry.location
        });
        
       
      } 
    });
  }