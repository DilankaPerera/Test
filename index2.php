<?php include('includes/db.php');?>
<!DOCTYPE html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Using MySQL and PHP with Google Maps</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->


    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 600px;
            width: 1000px;
            margin-bottom: 20px;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>


</head>

<body onload="initGeolocation();">
<div class="container">
<div id="map"></div>
<button type="button" class="btn btn-primary" onclick="initMap();">Show Closest Locations</button>
</div>
<p id="message"></p>
<form method="post" action="api2.php" id="myForm">
    <div class="form-group">
        <!-- provider_counter service id  !-->
        <!--<label for="provider_counter" class="control-label">Closest Providers :</label>
        <div class="text-lg-center alert-danger" id="info"></div>-->
        <!-- display map  !-->
        <!-- current latituide and longtuide  !-->
        <!--<input id="ProviderId" name="ProviderId" type="hidden" value="" />-->
        <input id="lat" type="hidden" value="" name="lat"/>
        <input id="lng" type="hidden" value="" name="lng"/>
    </div>
    <!-- map div container -->
</form>
<form action="checkout1.php">
    <input  type="submit" id="sub"></input>
</form>

<script type="text/javascript">



function initGeolocation()
    {
        if( navigator.geolocation )
        {

            // Call getCurrentPosition with success and failure callbacks
            navigator.geolocation.getCurrentPosition( success, fail );

        }
        else
        {
            alert("Sorry, your browser does not support geolocation services.");
        }
    }
   var lat = document.getElementById("lat"); // this will select the input with id = lat
    var lng = document.getElementById("lng"); // this will select the input with id = lng
   // var info = document.getElementById("info"); // this will select the current div  with id = info
    var map;
    var km = 2; // this kilometers used to specify circle wide when use drawcircle function
    var Crcl ; // circle variable
 // markers array ,we will fill it dynamically
    // information window ,we will use for our location and for markers
    function success(position)
    {
        var pos =    {
            lat: position.coords.latitude,
            lng: position.coords.longitude
        };
        lat.value  =  position.coords.latitude ;
        lng.value  =  position.coords.longitude;


        // Prepare the map options
        var mapOptions =
            {
                zoom: 12,
                center: pos,
                mapTypeControl: false,
                navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

        // Create the map, and place it in the map_canvas div
        map = new google.maps.Map(document.getElementById("map"), mapOptions);

        //search for schools within 1500 metres of our current location, and as a marker use school.png
        /*placesRequest('Schools',coords,1500,['school'],'images/school.png');*/


        // Place the initial marker
        var marker = new google.maps.Marker({
            position: pos,
            map: map,
            title: "Your current location!"
        });
        var infoWindow= new google.maps.InfoWindow({
            content: "Here's your Location"
        });
        google.maps.event.addListener(marker, 'click',function () {
            infoWindow.open(map,marker);
        });


        DrowCircle(mapOptions, map, pos, km);
    }

    function fail()
    {
        // Could not obtain location
    }

    function DrowCircle(mapOptions, map, pos, km ) {
        var populationOptions = {
            strokeColor: '#FF0000',
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: '#FF0000',
            fillOpacity: 0.35,
            map: map,
            center: pos,
            radius: Math.sqrt(km*500) * 100
        };
        // Add the circle for this city to the map.
        this.Crcl = new google.maps.Circle(populationOptions);
    }
// map locations here
    var customLabel = {
        restaurant: {
            label: 'R'
        },
        bar: {
            label: 'B'
        }
    };

    function initMap() {
        var infoWindow = new google.maps.InfoWindow;

        // Change this depending on the name of your PHP or XML file
        downloadUrl('api2.php', function(data){
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
                var id = markerElem.getAttribute('id');
                var name = markerElem.getAttribute('house_number');
                var address = markerElem.getAttribute('street_name');
                var type = markerElem.getAttribute('city');
                var point = new google.maps.LatLng(
                    parseFloat(markerElem.getAttribute('lat')),
                    parseFloat(markerElem.getAttribute('lng')));

                var infowincontent = document.createElement('div');
                var strong = document.createElement('strong');
                strong.textContent = name
                infowincontent.appendChild(strong);
                infowincontent.appendChild(document.createElement('br'));

                var text = document.createElement('text');
                text.textContent = address
                infowincontent.appendChild(text);
                var icon = customLabel[type] || {};
                var marker = new google.maps.Marker({
                    map: map,
                    position: point,
                    label: icon.label
                });
                marker.addListener('click', function() {
                    infoWindow.setContent(infowincontent);
                    infoWindow.open(map, marker);
                });
            });
        });
    }



    function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
            if (request.readyState == 4) {
                request.onreadystatechange = doNothing;
                callback(request, request.status);
            }
        };

        request.open('GET', url, true);
        request.send(null);
    }

    function doNothing() {}
</script>
<script
        src="https://code.jquery.com/jquery-2.2.4.js"
        integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZqgB95gjNr18bqMG7TFjFTLuJr6OMRAY&callback=initMap">
</script>
</body>
</html>
