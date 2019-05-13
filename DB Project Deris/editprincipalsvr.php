<?php
require 'connectdb.php';

$fname = $_REQUEST['fname'];
$department = $_REQUEST['department'];
$id = $_REQUEST['id'];
$gender = $_REQUEST['gender'];
$salary = $_REQUEST['salary'];

$sql = "update Principals set name='$fname', department = '$department', gender = '$gender', salary = '$salary' where id = $id";


if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}


?>
<script>
window.location = 'principallisting.php';
</script>