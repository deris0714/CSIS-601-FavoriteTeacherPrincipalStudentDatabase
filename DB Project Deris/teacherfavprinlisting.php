<p align ="right"><a href="menu.php" >Main Menu</a></p>
<?php
require 'connectdb.php';

if ($mysqli->connect_errno) {
    echo "Error: Failed to make a MySQL connection, here is why: </br>";
    echo "Errno: " . $mysqli->connect_errno . "</br>";
    echo "Error: " . $mysqli->connect_error . "</br>";
    exit;
}

$sql = "SELECT * FROM TeacherFavPrincipal ";
if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

echo "<h1 style='color:blue'> Teachers' Favorite Principal Table </h1>";
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
    <th> Principal ID</th>
    <th> Principal Name</th>
    <th> School Name</th>
    <th> Year </th>
    <th> Why?</th>
    <th> Delete </th>
    <th> Edit Details </th>
     </tr>";

while ($s = $result->fetch_assoc()) {
$name = $s["teachername"];

echo "<tr>";
echo "<td>" . $s["teacherid"] . " </td>";
echo "<td>" . $s["teachername"] . " </td>";
echo "<td>" . $s["principalid"] . " </td>";
echo "<td>" . $s["principalname"] . " </td>";
echo "<td>" . $s["schoolname"] . " </td>";
echo "<td>" . $s["yearrecordmade"] . " </td>";
echo "<td>" . $s["why"] . " </td>";
echo "<td>";
echo "<a onClick = 'alertFunction(\"".$name."\")' href='delteachfavprinsrv.php?tid=". $s["teacherid"] ."&pid=".$s["principalid"]."'>DEL</a> "; 
echo "</td>";
echo "<td>"; 
echo "<a href='editteachfavprinclt.php?tid=". $s["teacherid"] ."&pid=".$s["principalid"]."'>EDT</a>"; 
echo "</td>";

echo "</tr>"; 
}
echo "</table>";
?>

<a href='cltteacherfavprin.html'>Add New Favorite</a>

<script>
function alertFunction(name){    
    alert("You deleted " + name + "'s favorite principal record.");
}
</script>




