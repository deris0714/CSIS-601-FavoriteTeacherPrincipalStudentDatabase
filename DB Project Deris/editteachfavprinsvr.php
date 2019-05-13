<?php
require 'connectdb.php';
$pid = $_REQUEST['pid'];
$tid = $_REQUEST['tid'];
$pname = $_REQUEST['pname'];
$tname = $_REQUEST['tname'];
$school = $_REQUEST['school'];
$year = $_REQUEST['year'];
$why = $_REQUEST['why'];


$sql = "update TeacherFavPrincipal set principalname='$pname', teachername = '$tname', schoolname = '$school', yearrecordmade = '$year', why = '$why' where principalid= '$pid' AND teacherid = '$tid'" ;




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