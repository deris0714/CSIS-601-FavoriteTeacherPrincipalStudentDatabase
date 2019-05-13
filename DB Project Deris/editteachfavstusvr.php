<?php
require 'connectdb.php';
$sid = $_REQUEST['sid'];
$tid = $_REQUEST['tid'];
$sname = $_REQUEST['sname'];
$tname = $_REQUEST['tname'];
$school = $_REQUEST['school'];
$year = $_REQUEST['year'];
$why = $_REQUEST['why'];


$sql = "update TeacherFavStudents set studentname='$sname', teachername = '$tname', schoolname = '$school', yearhad = '$year', why = '$why' where studentid= '$sid' AND teacherid = '$tid'" ;




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