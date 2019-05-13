<p align ="right"><a href="menu.php" >Main Menu</a></p>
<?php
require 'connectdb.php';

if ($mysqli->connect_errno) {
    echo "Error: Failed to make a MySQL connection, here is why: </br>";
    echo "Errno: " . $mysqli->connect_errno . "</br>";
    echo "Error: " . $mysqli->connect_error . "</br>";
    exit;
}


$id = $_REQUEST['studentidnum'];

$sql = "CALL getOneStudentsFavs($id) ";
if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

echo "<h1 style='color:blue'> Student's Favorite Teachers Table </h1>";
echo "<style>
table, th, td, tr {
    border: 1px solid black;
    text-align: center;

}
</style>";


echo "<table>";
echo "<tr>
    <th> Student Name</th>
    <th> Teacher Name</th>
    <th> Student's Gender</th>
    <th> Teacher's Gender</th>
    <th> Subject</th>
    <th> Course Name</th>
    <th> GPA </th>
    <th> Why?</th>
     </tr>";

while ($s = $result->fetch_assoc()) {


echo "<tr>";
echo "<td>" . $s["sname"] . " </td>";
echo "<td>" . $s["tname"] . " </td>";
echo "<td>" . $s["sgender"] . " </td>";
echo "<td>" . $s["tgender"] . " </td>";
echo "<td>" . $s["subject"] . " </td>";
echo "<td>" . $s["coursename"] . " </td>";
echo "<td>" . $s["gpa"] . " </td>";
echo "<td>" . $s["why"] . " </td>";
echo "</tr>"; 
}
echo "</table>";
?>




