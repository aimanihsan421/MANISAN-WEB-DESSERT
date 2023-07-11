<html>
<head>
<title>Creative Multimedia Competition 2020</title>
<style>
body {background-color: #E799A3;}
</style>
</head>
<body>
<h1 style = "text-align:center; background-color:#E8ADAA;"><font color="#DE3163"><i>Manisan Dessert and Sweet</i></font></h1>>
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
//create and execute query
$sql = "SELECT * FROM membership";
$result = $conn->query($sql);
//check if records were returned
if ($result->num_rows > 0) {
//create a table to display the record
echo '<table cellpadding=10 cellspacing=0 border=1 align="center">';
echo '<tr>
<td align="center"><b> Name</b></td>
<td align="center"><b> Contact</b></td>
<td align="center"><b> Email</b></td>
</tr>';
// output data of each row
while($row = $result->fetch_assoc()) {
echo '<tr>';
echo '<td align="center">'.$row["name"].'</td>';
echo '<td align="center">'.$row["contact"].'</td>';
echo '<td align="center">'.$row["email"].'</td>';
echo '</tr>';
}
}
else {
echo "0 results"; //if no record found in the database
}
//close connection
$conn->close();
echo '<p><a href="adminmenu.php">Back to Main Menu</a></p>';
?>
</body>
</html>