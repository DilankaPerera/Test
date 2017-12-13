<?php

include('functions/functions.php');
include('includes/db.php');

?>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Gzone Technologies</title>


	<link rel="stylesheet" type="text/css" href="styles/style.css" media="all"/>
	<link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->


    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 400px;
            width: 400px;
            margin-bottom: 20px;
        }
        /* Optional: Makes the sample page fill the window. */

    </style>


</head>
<body>

	<!-- header -->
	<?php include_once('Templates/header.php'); ?>

	<!-- content -->

	<div class="main_content">

				<div class="checkbox1">
                        <form method="post" action="checkout2.php">
                            <h1>Checkout - Delivery method</h1>
                            <ul class="nav nav-pills nav-justified">
                                <li class="active"><a href="checkbox1.php"><i class="fa fa-truck"></i><br>Delivery Method</a>
                                </li>
                                <li class="disabled"><a href=""><i class="fa fa-eye"></i><br>Order Review</a>
                                </li>
                                <li class="disabled"><a href=""><i class="fa fa-money"></i><br>Payment Method</a>
                                </li>
                                
                            </ul>

                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="box shipping-method">

                                            <h3>Courier Service</h3>

                                            <div class="box-footer text-center">

                                                <input type="checkbox" name="courier" value="1">
                                            </div>
                                            <div id="delbox">
                                                <!-- <form id="cadd"> -->
                                                    <label for="fname">First Name</label>
                                                    <input type="text" name="fname">
                                                    <label for="lname">Last name</label>
                                                    <input type="text" name="lname">
                                                    <label for="fname">Address</label>
                                                    <input type="text" name="fname">
                                                    <label for="lname">Postal Code</label>
                                                    <input type="text" name="lname">
                                                    <label for="fname">Contact Number</label>
                                                    <input type="text" name="fname">
                                                    <label for="lname">Email</label>
                                                    <input type="text" name="lname">
                                                    <!-- 
                                                </form>
                                               -->
                                            </div>
                                        </div>
                                    </div>
                             

                                    <div class="col-sm-6">
                                        <div class="box shipping-method">

                                            <h3>Select Collection Point</h3>

                                            <div class="box-footer text-center">

                                                <input type="checkbox" name="collection_point" value="0">
                                            </div>
                                            
                                            <div id ='map'>
                                                <!-- <div id="map">
                                                    
                                                </div> -->
                                                <!-- <button type="button" class="btn btn-primary" onclick="initMap();">Show Closest Locations</button> -->
                                                 </div>                  
                                                    <!-- <p id="message"></p>
                                                
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                              

                                <br>
                                <br>

                            </div>
                      
                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="view_cart.php" class="btn btn-default"><i class="fa fa-chevron-left"></i> Back to My Cart</a>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary"> Continue to Order Review <i class="fa fa-chevron-right"></i>
                                    </button>
                            </div>
                </div>
                            </div>
                        </form>
                        <form action="index2.php">
                                            <input type="submit" name="submit" value="submit">
                                            </form>
                    </div>
			

			









			</div>
	</div>
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
   // var lat = document.getElementById("lat"); // this will select the input with id = lat
   //  var lng = document.getElementById("lng"); // this will select the input with id = lng
   // var info = document.getElementById("info"); // this will select the current div  with id = info
    var map;
    var km = 10; // this kilometers used to specify circle wide when use drawcircle function
    var Crcl ; // circle variable
 // markers array ,we will fill it dynamically
    // information window ,we will use for our location and for markers
    function success(position)
    {
        var pos =    {
            lat: position.coords.latitude,
            lng: position.coords.longitude
        };
        


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


        // DrowCircle(mapOptions, map, pos, km);
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
        downloadUrl('api2.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
                var id = markerElem.getAttribute('id');
                var name = markerElem.getAttribute('name');
                var address = markerElem.getAttribute('address');
                var type = markerElem.getAttribute('type');
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
	<!-- footer -->
	<?php include_once('Templates/footer.php'); ?>


</body>
</html>
