<?php

require 'connectdb.php';

$fname = $_REQUEST['fname'];
$gender = $_REQUEST['gender'];
$glevel = $_REQUEST['glevel'];
$gpa = $_REQUEST['gpa'];
$sql = "insert into Students (name,gender,gradelevel, gpa) VALUES ('$fname','$gender','$glevel', '$gpa')";





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
