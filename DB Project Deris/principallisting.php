<p align ="right"><a href="menu.php" >Main Menu</a></p>
<?php
require 'connectdb.php';

if ($mysqli->connect_errno) {
    echo "Error: Failed to make a MySQL connection, here is why: </br>";
    echo "Errno: " . $mysqli->connect_errno . "</br>";
    echo "Error: " . $mysqli->connect_error . "</br>";
    exit;
}

$sql = "SELECT * FROM Principals where active = 'YES' ";
if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

echo "<h1 style='color:blue'> Active Principals</h1>";
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
    <th> Department </th>
    <th> Gender</th>
    <th> Salary</th>
    <th> Inactivate </th>
    <th> Edit Details </th>
     </tr>";

while ($s = $result->fetch_assoc()) {
$name = $s["name"];

echo "<tr>";
echo "<td>" . $s["id"] . " </td>";
echo "<td>" . $s["name"] . " </td>";
echo "<td>" . $s["department"] . " </td>";
echo "<td>" . $s["gender"] . " </td>";
echo "<td>" . $s["salary"] . " </td>";
echo "<td>";
echo "<a onClick = 'alertFunction(\"".$name."\")' href='inaprincipalsvr.php?id=" . $s["id"] . "'>INA</a> "; 
echo "</td>";
echo "<td>";
echo "<a href='editprincipalclt.php?id=" . $s["id"] . "'>EDT</a>"; //fix
echo "</td>";

echo "</tr>"; 
}
echo "</table>";
?>


</br>
<a href='inaprincipallisting.php'> Show Inactive Principals </a></br>
<a href='cltaddprincipal.html'>Add New Principal</a>




<script>
function alertFunction(name){    
    alert("You marked " + name + " as inactive. Contact local administrator if this was incorrect.");
}
</script>





