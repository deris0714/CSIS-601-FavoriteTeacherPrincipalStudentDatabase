<?php
require 'connectdb.php';
$tid = $_REQUEST['tid'];
$pid = $_REQUEST['pid'];


$sql = "delete from TeacherFavPrincipal where teacherid =". $tid . " AND principalid = ". $pid ;



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