<h1 style = "text-align:center; background-color:#E8ADAA;"><font color="#DE3163"><i>Manisan Dessert and Sweet</i></font></h1>
<?php
session_start();
unset($_SESSION['username']);
session_destroy();
header("Location: loginauto.php");
exit;
?>