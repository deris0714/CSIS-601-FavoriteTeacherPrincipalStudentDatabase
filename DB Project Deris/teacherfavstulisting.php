<p align ="right"><a href="menu.php" >Main Menu</a></p>
<?php
require 'connectdb.php';

if ($mysqli->connect_errno) {
    echo "Error: Failed to make a MySQL connection, here is why: </br>";
    echo "Errno: " . $mysqli->connect_errno . "</br>";
    echo "Error: " . $mysqli->connect_error . "</br>";
    exit;
}

$sql = "SELECT * FROM TeacherFavStudents ";
if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

echo "<h1 style='color:blue'> Teachers' Favorite Students Table </h1>";
echo "<style>
table, th, td, tr {
    border: 1px solid black;
    text-align: center;

}
</style>";


echo "<table>";
echo "<tr>
    <th> Teacher ID </th>
    <th> Teacher Name</th>
    <th> Student ID</th>
    <th> Student Name</th>
    <th> School Name</th>
    <th> Year Teacher Taught Student</th>
    <th> Why?</th>
    <th> Delete </th>
    <th> Edit Details </th>
     </tr>";

while ($s = $result->fetch_assoc()) {
$name = $s["teachername"];

echo "<tr>";
echo "<td>" . $s["teacherid"] . " </td>";
echo "<td>" . $s["teachername"] . " </td>";
echo "<td>" . $s["studentid"] . " </td>";
echo "<td>" . $s["studentname"] . " </td>";
echo "<td>" . $s["schoolname"] . " </td>";
echo "<td>" . $s["yearhad"] . " </td>";
echo "<td>" . $s["why"] . " </td>";
echo "<td>";
echo "<a onClick = 'alertFunction(\"".$name."\")' href='delteachfavstusrv.php?tid=". $s["teacherid"] ."&sid=".$s["studentid"]."'>DEL</a> "; 
echo "</td>";
echo "<td>";          
echo "<a href='editteachfavstuclt.php?tid=". $s["teacherid"] ."&sid=".$s["studentid"]."'>EDT</a>";
echo "</td>";

echo "</tr>"; 
}
echo "</table>";
?>

<a href='cltteacherfavstu.html'>Add New Favorite</a>



<script>
function alertFunction(name){    
    alert("You deleted " + name + "'s favorite student record.");
}
</script>

