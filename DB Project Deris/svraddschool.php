<?php

require 'connectdb.php';

$sname = $_REQUEST['sname'];
$district = $_REQUEST['district'];
$address = $_REQUEST['address'];
$city = $_REQUEST['city'];
$zipcode = $_REQUEST['zipcode'];
$state = $_REQUEST['state'];
$sql = "insert into Schools (schoolname,district,address, city, zipcode, state) VALUES ('$sname','$district','$address', '$city', '$zipcode', '$state')";





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