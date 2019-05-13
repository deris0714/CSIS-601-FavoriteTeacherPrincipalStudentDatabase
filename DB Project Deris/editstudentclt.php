<?php
require 'connectdb.php';

$sql = "SELECT * from Students where id = " . $_REQUEST['id'];

if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}
$row = $result->fetch_assoc();
$fname = $row['name'];
$gradelevel = $row['gradelevel'];
$gpa = $row['gpa'];
$gender = $row['gender'];
$id = $row['id'];


?>

<form action="editstudentsvr.php">
<input type="hidden" name="id" value="<?php echo $id?>" />
Full Name:<input name="fname" value="<?php echo $fname?>" /></br></br>
Grade Level:<input name="glevel"value="<?php echo $gradelevel?>" /></br></br>
Grade Point Average (GPA): <input name="gpa" value="<?php echo $gpa?>" /></br></br>
Gender: <input name="gender" value="<?php echo $gender?>" /></br></br>
<input type="submit" value="Save"/>


</form>