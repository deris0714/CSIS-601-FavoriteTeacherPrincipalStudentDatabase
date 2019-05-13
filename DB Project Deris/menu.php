<h1 style='color:#0000A0'>Welcome to Favorites!</h1>
<h2 style='color:#2554C7'> Where would you like to check out first?</h2> 

<h3>Students</h3>

<a href="studentlisting.php">Check Out Current Students</a></br>
<a href="inastudentslisting.php">Check Out Inactive Students</a></br>
<a href="cltaddstudent.html">Add a Student</a></br></br>


<h3>Teachers</h3>

<a href="teacherlisting.php">Check Out Current Teachers</a></br>
<a href="inateacherslisting.php">Check Out Inactive Teachers</a></br>
<a href="cltaddteacher.html">Add a Teacher</a></br></br>

<h3>Principals</h3>

<a href="principallisting.php">Check Out Current Principals</a></br>
<a href="inaprincipallisting.php">Check Out Inactive Principals</a></br>
<a href="cltaddprincipal.html">Add a Principal</a></br></br>


<h3>Schools</h3>

<a href="schoollisting.php">Check Out Current Schools</a></br>
<a href="inaschoollisting.php">Check Out Inactive Schools</a></br>
<a href="cltaddschool.html">Add a School</a></br></br>

<b>Are you a current student with a favorite teacher, or are you just a nosey person?</b></br>
<a href="studentfavteachlisting.php">Check Out Students' Favorite Teachers</a></br>
<b>For real, are you a student and you have a favorite teacher?</b></br>
<a href="cltstudentfavteach.html">Add a Favorite Teacher</a></br></br>


<b>Are you a current teacher with a favorite student, or are you just a nosey person?</b></br>
<a href="teacherfavstulisting.php">Check Out Teachers' Favorite Students</a></br>
<b>For real, are you a teacher and you have a favorite student?</b></br>
<a href="cltteacherfavstu.html">Add a Favorite Student</a></br></br>



<b>Are you a current teacher with a favorite principal, or are you just a nosey person?</b></br>
<a href="teacherfavprinlisting.php">Check Out Teachers' Favorite Principals</a></br>
<b>For real, are you a teacher and you have a favorite principal?<b></br>
<a href="cltteacherfavprin.html">Add a Favorite Principal</a></br></br>
</br>
</br>
</br>


<h1 style='color:blue'>STANDARD REPORTS</h1>
</html>
<?php
require 'connectdb.php';

if ($mysqli->connect_errno) {
    echo "Error: Failed to make a MySQL connection, here is why: </br>";
    echo "Errno: " . $mysqli->connect_errno . "</br>";
    echo "Error: " . $mysqli->connect_error . "</br>";
    exit;
}

$sql = "SELECT AVG(salary) FROM Teachers where gender = 'Male'  ";
if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

echo "<table>";
echo "<th>Average Salary of Male Teachers<th>";
while ($s = $result->fetch_assoc()) {
echo "<tr> ";
echo "<td> $" . $s["AVG(salary)"] . " </td>";
echo "</tr>"; 
}
echo "</table>";


$sql = "SELECT AVG(salary) FROM Teachers where gender = 'Female'  ";
if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

echo "<table>";
echo "<tr>
    <th>Average Salary of Female Teachers<th>
     </tr>";
while ($s = $result->fetch_assoc()) {
echo "<tr>";
echo "<td>$" . $s["AVG(salary)"] . " </td>";
echo "</tr>"; 
}
echo "</table>";
?>
<html>
<h1 style='color:blue'> Teacher's number of 5 Stars Received </h1>
<h3>Please enter the  Teacher's ID that you would like to learn how many 5 stars they have and press enter</h3>

<input type="number" name="teacheridnum" min="1" onchange="fiveStars(this.value)"><br><br>



</br>
<table>
<tr><th> Number of 5 Stars </th></tr>
<tr>
<td><div id ="puthere5star"></div></td>
</tr>
</table>

<h1 style='color:blue'> Learn about a Student's Favorite Teacher</h1>
<h3>Please enter the Student's ID that you would like to learn about their favorite teachers.</h3>
<form action = "studentFavserver.php">
<input type="number" name="studentidnum" min="1" ><br><br>
<input type="submit" value="Get This Student">
</form>


</html>
<script>
function fiveStars(id){

var xhttp = new XMLHttpRequest(); xhttp.onreadystatechange = function(){
if (this.readyState == 4 && this.status == 200) {
document.getElementById("puthere5star").innerHTML = this.responseText;
}
}
xhttp.open( "GET", "fivestars.php?id=" + id, true);														xhttp.send();
}
</script>

