<?php
require 'connectdb.php';
$pid = $_REQUEST['pid'];
$tid = $_REQUEST['tid'];


$sql = "Select * from TeacherFavPrincipal where teacherid =". $tid . " AND principalid = ". $pid ;


if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}
$row = $result->fetch_assoc();
$pname = $row['principalname'];
$tname= $row['teachername'];
$school = $row['schoolname'];
$year = $row['yearrecordmade'];
$why = $row['why'];
$pid = $row['principalid'];
$tid = $row['teacherid'];

?>

<form action="editteachfavprinsvr.php">
<input type="hidden" name="pid" value="<?php echo $pid?>" />
<input type="hidden" name="tid" value="<?php echo $tid?>" />

Teacher's Name:<input name="tname" value="<?php echo $tname?>" /></br></br>
Prinicpal's Name: <input name="pname"value="<?php echo $pname?>" /></br></br>
School Name: <input name="school" value="<?php echo $school?>" /></br></br>
Year: <input name="year" value="<?php echo $year?>" /></br></br>
Why: </br><textarea name = "why" rows="4" cols="50" ><?php echo $why?></textarea>
<input type="submit" value="Save"/>


</form>