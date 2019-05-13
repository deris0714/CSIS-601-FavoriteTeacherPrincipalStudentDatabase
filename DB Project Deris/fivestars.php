<?php

require 'connectdb.php';

$id= $_GET["id"];
//echo $id . " here is the id";

$sql = "SELECT getNumberOf5StarRatings('$id') as fivestar";


if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}




while ($s = $result->fetch_assoc()) {
if( $s["fivestar"]==0){
echo "The teacher does not have 5 star ratings";
}
else{
echo $s["fivestar"];
}
}




?>