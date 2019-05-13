<?php
require 'connectdb.php';

$name = $_REQUEST['name'];
$district = $_REQUEST['district'];
$address = $_REQUEST['address'];
$id = $_REQUEST['id'];
$city = $_REQUEST['city'];
$zip = $_REQUEST['zip'];
$state = $_REQUEST['state'];

$sql = "update Schools set schoolname='$name', district = '$district', address = '$address', city = '$city', zipcode = '$zip', state = '$state' where id = $id";



if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}


?>
<script>
window.location = 'schoollisting.php';
</script>