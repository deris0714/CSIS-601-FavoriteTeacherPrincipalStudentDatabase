<?php

require 'connectdb.php';

$tfname = $_REQUEST['tfname'];
$pfname = $_REQUEST['pfname'];
$school = $_REQUEST['schoolname'];
$year = $_REQUEST['year'];
$rec = $_REQUEST['record'];

$sql = "SELECT id FROM Teachers WHERE name = '$tfname'";

$result = $mysqli->query($sql);
if($t = $result->fetch_assoc()){
$tid = $t["id"];
}


$sql = "select id from Principals WHERE name = '$pfname'";
$result = $mysqli->query($sql);
if($p = $result->fetch_assoc()){
$pid = $p["id"];
}


$sql = "insert into TeacherFavPrincipal (teacherid, teachername, principalid, principalname, schoolname, yearrecordmade, why) VALUES ('$tid', '$tfname', '$pid', '$pfname', '$school', '$year', '$rec')";





if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}


?>
<script>
window.location = 'teacherfavprinlisting.php';
</script>
