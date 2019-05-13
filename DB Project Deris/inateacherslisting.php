<p align ="right"><a href="menu.php" >Main Menu</a></p>
<?php
require 'connectdb.php';

if ($mysqli->connect_errno) {
    echo "Error: Failed to make a MySQL connection, here is why: </br>";
    echo "Errno: " . $mysqli->connect_errno . "</br>";
    echo "Error: " . $mysqli->connect_error . "</br>";
    exit;
}

$sql = "SELECT * FROM inacteach ";
if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

echo "<h1 style='color:blue'> Inactive Teachers </h1>";
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
    <th> Subject </th>
    <th> Salary</th>
    <th> Edit Details </th>
     </tr>";

while ($s = $result->fetch_assoc()) {


echo "<tr>";

echo "<td>" . $s["name"] . " </td>";
echo "<td>" . $s["gender"] . " </td>";
echo "<td>" . $s["subject"] . " </td>";
echo "<td>" . $s["salary"] . " </td>";
echo "<td>";
echo "<a href='editteacherclt.php?id=" . $s["id"] . "'>EDT</a>"; 
echo "</td>";

echo "</tr>"; 
}
echo "</table>";

echo "</br> NOTE: You cannot make a teacher active again. Contact your local administrator to make a teacher active.  </br> If you would like to make an active teacher to inactive, please follow the <b>Exclude Inactive Teachers</b> link below. </br>";

?>
</br>
<a href='teacherlisting.php'> Exclude Inactive Teachers </a></br>

<a href='cltaddteacher.html'>Add New Teacher</a>