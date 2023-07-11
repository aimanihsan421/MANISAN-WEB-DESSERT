<html>
<head>

<title>Main Menu for Admin</title>
<style>
body {background-color: #E799A3;}
</style>
</head>
<body>
    
<h1 style = "text-align:center; background-color:#E8ADAA;"><font color="#DE3163"><i>Manisan Dessert and Sweet</i></font></h1>
<p>Main Menu for Admin</p>
<p>&nbsp;</p>
<form action="membershipList.php" method="post">
<p><input type="submit" value="View Record" name="cmdView"></p>
</form>
<form action="searchRecord.php" method="post">
<p><input type="submit" value="Search Record" name="cmdSearch"></p>
</form>
<form action="deleteList.php" method="post">
<p><input type="submit" value="Delete Record" name="cmdDelete"></p>
</form>
<form action="logout.php" method="post">
<p><input type="submit" value="Log Out" name="cmdlogout"></p>
</form>
</body>
</html>