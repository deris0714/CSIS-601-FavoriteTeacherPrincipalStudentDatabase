<p align ="right"><a href="menu.php" >Main Menu</a></p>

<?php
require 'connectdb.php';

if ($mysqli->connect_errno) {
    echo "Error: Failed to make a MySQL connection, here is why: </br>";
    echo "Errno: " . $mysqli->connect_errno . "</br>";
    echo "Error: " . $mysqli->connect_error . "</br>";
    exit;
}

$sql = "SELECT * FROM inacprin ";
if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

echo "<h1 style='color:blue'> Inactive Principals </h1>";
echo "<style>
table, th, td, tr {
    border: 1px solid black;
    text-align: center;

}
</style>";


echo "<table>";
echo "<tr>
  
    <th>Name</th>

    <th> Gender</th>
    <th> Salary</th>

    <th> Edit Details </th>
     </tr>";

while ($s = $result->fetch_assoc()) {


echo "<tr>";

echo "<td>" . $s["name"] . " </td>";

echo "<td>" . $s["gender"] . " </td>";
echo "<td>" . $s["salary"] . " </td>";

echo "<td>";
echo "<a href='editprincipalclt.php?id=" . $s["id"] . "'>EDT</a>"; 
echo "</td>";

echo "</tr>"; 
}
echo "</table>";

echo "</br> NOTE: You cannot make a principal active again. Contact your local administrator to make a principal active.  </br>  If you would like to make an active principal to inactive, please follow the <b>Exclude Inactive Principals</b> link below. </br>";

?>
</br>
<a href='principallisting.php'> Exclude Inactive Principals </a></br>

<a href='cltaddprincipal.html'>Add New Principal</a>