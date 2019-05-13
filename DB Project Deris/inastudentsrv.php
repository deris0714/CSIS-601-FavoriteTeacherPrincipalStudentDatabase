
<?php
require 'connectdb.php';




$id = $_REQUEST['id'];


$sql = "update Students set active='NO' where id = ". $id;



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