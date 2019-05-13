<?php

require 'connectdb.php';

$tfname = $_REQUEST['tfname'];
$sfname = $_REQUEST['sfname'];
$school = $_REQUEST['schoolname'];
$year = $_REQUEST['year'];
$rec = $_REQUEST['record'];

$sql = "SELECT id FROM Teachers WHERE name = '$tfname'";

$result = $mysqli->query($sql);
if($t = $result->fetch_assoc()){
$tid = $t["id"];
}


$sql = "select id from Students WHERE name = '$sfname'";
$result = $mysqli->query($sql);
if($s = $result->fetch_assoc()){
$stid = $s["id"];
}


$sql = "insert into TeacherFavStudents (teacherid, teachername,studentid,studentname,schoolname, yearhad, why) VALUES ('$tid', '$tfname', '$stid', '$sfname', '$school', '$year', '$rec')";





if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}


?>
<script>
window.location = 'teacherfavstulisting.php';
</script>
