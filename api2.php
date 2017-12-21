<?php include('includes/db.php');?>
<?php
$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);



    $lat=6.86452;
    $lng=79.90124;




// Select all the rows in the markers table

$query = "SELECT
    id,house_number,street_name,city,lat,lng,
    ( 3000 * acos( cos( radians({$lat}) ) * cos( radians( `lat` ) ) * cos( radians( `lng` ) - radians({$lng}) ) + sin( radians({$lat}) ) * sin( radians( `lat` ) ) ) ) AS distance
    FROM agent_address
    HAVING distance < 2
    ORDER BY distance;
    ";
$result = mysqli_query($conn,$query);
if (!$result) {
    die('Invalid query: ' . mysqli_error($conn));
}

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each

while ($row = @mysqli_fetch_assoc($result)){
    // Add to XML document node
    $node = $dom->createElement("marker");
    $newnode = $parnode->appendChild($node);
    $newnode->setAttribute("id",$row['id']);
    $newnode->setAttribute("house_number",$row['house_number']);
    $newnode->setAttribute("street_name", $row['street_name']);
    $newnode->setAttribute("city", $row['city']);
    $newnode->setAttribute("lat", $row['lat']);
    $newnode->setAttribute("lng", $row['lng']);
}

echo $dom->saveXML();
?>