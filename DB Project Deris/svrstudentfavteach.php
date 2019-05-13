<?php

require 'connectdb.php';

$sfname = $_REQUEST['sfname'];
$tfname = $_REQUEST['tfname'];
$school = $_REQUEST['schoolname'];
$year = $_REQUEST['year'];
$star =$_REQUEST['stars'];
$rec = $_REQUEST['record'];

$sql = "SELECT id FROM Students WHERE name = '$sfname'";

$result = $mysqli->query($sql);
if($s = $result->fetch_assoc()){
$stid = $s["id"];
}


$sql = "select id from Teachers WHERE name = '$tfname'";
$result = $mysqli->query($sql);
if($t = $result->fetch_assoc()){
$tid = $t["id"];
}


$sql = "insert into StudentFavTeachers (studentid,studentname,teacherid, teachername,schoolname, yeartaken, why, stars) VALUES ('$stid', '$sfname', '$tid', '$tfname', '$school', '$year', '$rec', '$star')";





if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}


?>
<script>
window.location = 'studentfavteachlisting.php';
</script>
