<html>
<head>
<title>MANISAN 2020</title>
<style>
body {background-color: #E799A3;}
</style>
</head>
<body>
<h1 style = "text-align:center; background-color:#E8ADAA;"><font color="#DE3163"><i>Manisan Dessert and Sweet</i></font></h1>
<?php
$date = date("d-m-Y");
//get input values from form
extract($_POST);
?>
<p>Date: <b><?php print($date) ?></b></p>
<h3>MANISAN MEMBERSHIP</h3>
<table>
<tr><td>Name</td>
<td>:</td>
<td><b><?php print($adName) ?></b></td>
</tr>
<tr><td>Contact</td>
<td>:</td>
<td><b><?php print($adContact) ?></b></td>
</tr>
<tr><td>Email</td>
<td>:</td>
<td><b><?php print($adEmail) ?></b></td>
</tr>
</table>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "manisan";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error); }
//create query
$sql = "INSERT INTO membership(name, contact, email) VALUES ('$adName', '$adContact', '$adEmail')";

//execute query
if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
}
else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
//close connection
$conn->close();
?>
<br>
<form>
<input type="button" name="printButton" onClick="window.print()" value="Print">
</form>
</body>
</html>