
<style>
body {background-color: #E799A3;}
</style>
<h1 style = "text-align:center; background-color:#E8ADAA;"><font color="#DE3163"><i>Manisan Dessert and Sweet</i></font></h1>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "manisan";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
//escape special characters in a string
$advisor = mysqli_real_escape_string($conn, $_POST['name']);
//create and execute query
$sql = "SELECT * FROM membership WHERE name= '$advisor'";
$result = $conn->query($sql);
//check if records were returned
if ($result->num_rows > 0) {
//create a table to display the record
echo 'Selected record as the following: <br><br>';
echo '<p><table cellpadding=10 cellspacing=0 border=1 align="center">';
echo '

<td align="center"><b>Name</b></td>
<td align="center"><b>Contact</b></td>
<td align="center"><b>Email</b></td>
<td align="center">&nbsp&nbsp</td>
</tr>';
// output data of each row
while($row = $result->fetch_assoc()) {
echo '<tr>';
echo '<td align="center">'.$row["name"].'</td>';
echo '<td align="center">'.$row["contact"].'</td>';
echo '<td align="center">'.$row["email"].'</td>';
echo "<td align='center'><a href='updateRecord.php?pid=$row[name]'> UPDATE </a>
</td>";
echo '</tr>';
}
echo '</table></p>';
}
else {
echo '<font color=red>No record found';
}
//close connection
$conn->close();
?>