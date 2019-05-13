<?php
require 'connectdb.php';

$sql = "SELECT * from Schools where id = " . $_REQUEST['id'];

if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}
$row = $result->fetch_assoc();
$name = $row['schoolname'];
$district = $row['district'];
$address = $row['address'];
$city = $row['city'];
$zip = $row['zipcode'];
$state = $row['state'];
$id = $row['id'];


?>

<form action="editschoolsvr.php">
<input type="hidden" name="id" value="<?php echo $id?>" />
School Name: <input name="name" value="<?php echo $name?>" /></br></br>
District: <input name="district"value="<?php echo $district ?>" /></br></br>
Address: <input name="address" value="<?php echo $address?>" /></br></br>
City: <input name="city" value="<?php echo $city?>" /></br></br>
Zip Code: <input name="zip" value="<?php echo $zip ?>" /></br></br>
State: <input name="state" value="<?php echo $state?>" /></br></br>
<input type="submit" value="Save"/>


</form>