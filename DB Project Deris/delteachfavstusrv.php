<?php
require 'connectdb.php';
$sid = $_REQUEST['sid'];
$tid = $_REQUEST['tid'];


$sql = "delete from TeacherFavStudents where studentid =". $sid . " AND teacherid = ". $tid ;



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