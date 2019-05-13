<?php
require 'connectdb.php';

$fname = $_REQUEST['fname'];
$subject = $_REQUEST['subject'];
$coursename = $_REQUEST['coursename'];
$id = $_REQUEST['id'];
$gender = $_REQUEST['gender'];
$salary = $_REQUEST['salary'];

$sql = "update Teachers set name='$fname', subject = '$subject', coursename = '$coursename', gender = '$gender', salary = '$salary' where id = $id";



if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}


?>
<script>
window.location = 'teacherlisting.php';
</script>