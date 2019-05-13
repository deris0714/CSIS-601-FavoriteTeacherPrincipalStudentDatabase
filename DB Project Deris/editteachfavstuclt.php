<?php
require 'connectdb.php';
$sid = $_REQUEST['sid'];
$tid = $_REQUEST['tid'];


$sql = "Select * from TeacherFavStudents where studentid =". $sid . " AND teacherid = ". $tid ;



if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}
$row = $result->fetch_assoc();
$sname = $row['studentname'];
$tname= $row['teachername'];
$school = $row['schoolname'];
$year = $row['yearhad'];
$why = $row['why'];
$sid = $row['studentid'];
$tid = $row['teacherid'];

?>

<form action="editteachfavstusvr.php">
<input type="hidden" name="sid" value="<?php echo $sid?>" />
<input type="hidden" name="tid" value="<?php echo $tid?>" />

Teacher's Name:<input name="tname" value="<?php echo $tname?>" /></br></br>
Student's Name: <input name="sname"value="<?php echo $sname?>" /></br></br>
School Name: <input name="school" value="<?php echo $school?>" /></br></br>
Year: <input name="year" value="<?php echo $year?>" /></br></br>
Why:</br> <textarea name = "why" rows="4" cols="50" ><?php echo $why?></textarea>
<input type="submit" value="Save"/>


</form>