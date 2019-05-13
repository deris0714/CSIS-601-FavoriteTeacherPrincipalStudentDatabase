<?php
require 'connectdb.php';

$sql = "SELECT * from Teachers where id = " . $_REQUEST['id'];

if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}
$row = $result->fetch_assoc();
$fname = $row['name'];
$subject = $row['subject'];
$coursename = $row['coursename'];
$gender = $row['gender'];
$salary = $row['salary'];
$id = $row['id'];


?>

<form action="editteachersvr.php">
<input type="hidden" name="id" value="<?php echo $id?>" />
Full Name:<input name="fname" value="<?php echo $fname?>" /></br></br>
Subject:<input name="subject"value="<?php echo $subject?>" /></br></br>
Course Name: <input name="coursename" value="<?php echo $coursename?>" /></br></br>
Gender: <input name="gender" value="<?php echo $gender?>" /></br></br>
Salary: <input name="salary" value="<?php echo $salary?>" /></br></br>
<input type="submit" value="Save"/>


</form>