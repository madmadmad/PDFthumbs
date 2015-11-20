<?php

// set the goods
$name = $_POST['name'];
$imageData = $_POST['data'];

// Remove the headers (data:,) part.
// Chould use them according to needs such as to check image type
$filteredData=substr($imageData, strpos($imageData, ",")+1);
 
// Need to decode before saving since the data we received is already base64 encoded
$unencodedData=base64_decode($filteredData);
 
// Save file.
$fp = fopen( $name.'.png', 'wb' );
fwrite( $fp, $unencodedData);
fclose( $fp );

?>