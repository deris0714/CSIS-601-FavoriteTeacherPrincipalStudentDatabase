<p align ="right"><a href="menu.php" >Main Menu</a></p>
<?php
require 'connectdb.php';

if ($mysqli->connect_errno) {
    echo "Error: Failed to make a MySQL connection, here is why: </br>";
    echo "Errno: " . $mysqli->connect_errno . "</br>";
    echo "Error: " . $mysqli->connect_error . "</br>";
    exit;
}

$sql = "SELECT * FROM Teachers Where active = 'YES' ";
if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

echo "<h1 style='color:blue'> Active Teachers </h1>";
echo "<style>
table, th, td, tr {
    border: 1px solid black;
    text-align: center;

}
</style>";


echo "<table>";
echo "<tr>
    <th> ID </th>
    <th>Name</th>
    <th> Subject </th>
    <th> Course Name </th>
    <th> Gender</th>
    <th> Salary</th>
    <th> Inactivate </th>
    <th> Edit Details </th>
     </tr>";

while ($s = $result->fetch_assoc()) {
$name = $s["name"] ;

echo "<tr>";
echo "<td>" . $s["id"] . " </td>";
echo "<td>" . $s["name"] . " </td>";
echo "<td>" . $s["subject"] . " </td>";
echo "<td>" . $s["coursename"] . " </td>";
echo "<td>" . $s["gender"] . " </td>";
echo "<td>" . $s["salary"] . " </td>";
echo "<td>";
echo "<a onClick = 'alertFunction(\"".$name."\")' href='inateachersrv.php?id=" . $s["id"] . "'>INA</a> "; 
echo "</td>";
echo "<td>";
echo "<a href='editteacherclt.php?id=" . $s["id"] . "'>EDT</a>"; //fix
echo "</td>";

echo "</tr>"; 
}
echo "</table>";
?>

</br>
<a href='inateacherslisting.php'> Show Inactive Teachers </a></br>


<a href='cltaddteacher.html'>Add New Teacher</a> <!--check->


<script>
function alertFunction(name){    
    alert("You marked " + name + " as inactive. Contact local administrator if this was incorrect.");
}
</script>



