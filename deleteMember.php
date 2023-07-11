<html>
<head>
<title>Creative Multimedia Competition 2020</title>
<h1 style = "text-align:center; background-color:#E8ADAA;"><font color="#DE3163"><i>Manisan Dessert and Sweet</i></font></h1>
</head>
<body>
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
//get input value
$adName=$_POST['name'];
// sql to delete a record
$sql = "DELETE FROM membership WHERE name='$adName'";
if ($conn->query($sql) === TRUE) {
echo "Record deleted successfully";
}
else {
echo "Error deleting record: " . $conn->error;
}
//close connection
$conn->close();
echo '<p><a href="adminmenu.php">Back to Main Menu</a></p>';
?>
</body>
</html>