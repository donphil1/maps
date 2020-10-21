<?php
// $servername = "localhost";
// $username = "root";
// $password = "";

// Create connection
// $conn = new mysqli($servername, $username, $password);

// Check connection
// if ($conn->connect_error) {
  // die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";

// Create database
// $sql = "CREATE DATABASE coord";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }

// $sql = "INSERT INTO coordinates (latitude,longitude) VALUES ('$lon','$lat')";

// $sql = "SELECT Name, FROM coordinates";
// $result = $conn->query($sql);

// if ($result-> $sql) {
  // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["id"]. " - Name: " . $row["latitude"]. " " . $row["longitude"]. "<br>";
//   }
//  else {
//   echo "0 results";
// }

// if ($conn->query($sql) === TRUE) {
//   echo "Table coordinates created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }

// $conn->close();

    

?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
</head>
<body>
<div id="map" style="width: 800px; height: 600px;"></div>
<script>
var map = L.map('map').setView([0,0], 4);
L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {attribution: '<a href="http://osm.org/copyright">OSM</a>'}).addTo(map);

// <?php
//     if($result = $db->query('SELECT latitude,longitude FROM coordinates')){
//     echo ' var latlngs = [ ';
//     while($obj = $result->fetchArray()){
//     	if (!is_array($obj) || !isset($obj['latitude']) || !isset($obj['longitude']) || empty($obj['latitude']) || empty($obj['longitude'])) continue;
//     	echo '["'. $obj['latitude'].'","'.$obj['longitude'].'"],';
//     }
//     echo ']; ';
//     } else
//      echo('//'.$db->lastErrorMsg().chr(0xa));  
// 	 echo($data);
// ?>
var polyline = L.polyline(latlngs, {color: 'red'}).addTo(map);
map.fitBounds(polyline.getBounds());
</script>
</body>
</html>