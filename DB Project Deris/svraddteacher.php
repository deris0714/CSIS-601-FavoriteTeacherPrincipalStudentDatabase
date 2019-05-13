<?php

require 'connectdb.php';

$fname = $_REQUEST['fname'];
$subject = $_REQUEST['subject'];
$cname = $_REQUEST['cname'];
$gender = $_REQUEST['gender'];
$salary = $_REQUEST['salary'];
$sql = "insert into Teachers (name,subject,coursename, gender, salary) VALUES ('$fname','$subject','$cname', '$gender', '$salary')";





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
