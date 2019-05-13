<?php

require 'connectdb.php';

$fname = $_REQUEST['fname'];
$department = $_REQUEST['department'];
$gender = $_REQUEST['gender'];
$salary = $_REQUEST['salary'];
$sql = "insert into Principals (name,department,gender,salary) VALUES ('$fname', '$department','$gender','$salary')";





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
