<p align ="right"><a href="menu.php" >Main Menu</a></p>
<?php
require 'connectdb.php';

if ($mysqli->connect_errno) {
    echo "Error: Failed to make a MySQL connection, here is why: </br>";
    echo "Errno: " . $mysqli->connect_errno . "</br>";
    echo "Error: " . $mysqli->connect_error . "</br>";
    exit;
}

$sql = "SELECT * FROM inacschool ";
if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

echo "<h1 style='color:blue'> Inactive Schools </h1>";
echo "<style>
table, th, td, tr {
    border: 1px solid black;
    text-align: center;

}
</style>";


echo "<table>";
echo "<tr>
    
    <th>School Name</th>
    <th> District </th>

    <th> State </th>

    <th> Edit Details </th>
     </tr>";

while ($s = $result->fetch_assoc()) {
$name = $s["schoolname"];

echo "<tr>";

echo "<td>" . $s["schoolname"] . " &nbsp</td>";
echo "<td>" . $s["district"] . "&nbsp </td>";

echo "<td>" . $s["state"] . " &nbsp</td>";

echo "<td>";
echo "<a href='editschoolclt.php?id=" . $s["id"] . "'>EDT</a>"; //fix
echo "</td>";

echo "</tr>"; 
}
echo "</table>";
?>
</br>
<a href='allschoollisting.php'> Show Active Schools </a></br>

<a href='cltaddschool.html'>Add New School</a>






