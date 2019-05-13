<?php
require 'connectdb.php';

$fname = $_REQUEST['fname'];
$glevel = $_REQUEST['glevel'];
$gpa = $_REQUEST['gpa'];
$id = $_REQUEST['id'];
$gender = $_REQUEST['gender'];
$sql = "update Students set name='$fname',gradelevel = '$glevel', gpa = '$gpa', gender = '$gender' where id = $id";



if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}


?>
<script>
window.location = 'studentlisting.php';
</script>