<p align ="right"><a href="menu.php" >Main Menu</a></p>
<?php
require 'connectdb.php';

if ($mysqli->connect_errno) {
    echo "Error: Failed to make a MySQL connection, here is why: </br>";
    echo "Errno: " . $mysqli->connect_errno . "</br>";
    echo "Error: " . $mysqli->connect_error . "</br>";
    exit;
}

$sql = "SELECT * FROM StudentFavTeachers ";
if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

echo "<h1 style='color:blue'> Students' Favorite Teachers Table </h1>";
echo "<style>
table, th, td, tr {
    border: 1px solid black;
    text-align: center;

}
</style>";


echo "<table>";
echo "<tr>
    <th> Student ID </th>
    <th> Student Name</th>
    <th> Teacher ID</th>
    <th> Teacher Name</th>
    <th> School Name</th>
    <th> Year Student had Teacher</th>
    <th> Stars</th>
    <th> Why?</th>
    <th> Delete </th>
    <th> Edit Details </th>
     </tr>";

while ($s = $result->fetch_assoc()) {
$name = $s["studentname"];

echo "<tr>";
echo "<td>" . $s["studentid"] . " </td>";
echo "<td>" . $s["studentname"] . " </td>";
echo "<td>" . $s["teacherid"] . " </td>";
echo "<td>" . $s["teachername"] . " </td>";
echo "<td>" . $s["schoolname"] . " </td>";
echo "<td>" . $s["yeartaken"] . " </td>";
echo "<td>" . $s["stars"] . " </td>";
echo "<td>" . $s["why"] . " </td>";
echo "<td>";
echo "<a onClick = 'alertFunction(\"".$name."\")' href='delstudfavteachsrv.php?sid=". $s["studentid"] ."&tid=".$s["teacherid"]."'>DEL</a> "; //fix
echo "</td>";
echo "<td>";
echo "<a href='editstudfavteachclt.php?sid=". $s["studentid"] ."&tid=".$s["teacherid"]."'>EDT</a>"; //fix
echo "</td>";

echo "</tr>"; 
}
echo "</table>";
?>

<a href='cltstudentfavteach.html'>Add New Favorite</a>

<script>
function alertFunction(name){    
    alert("You deleted " + name + "'s favorite teacher record.");
}
</script>



