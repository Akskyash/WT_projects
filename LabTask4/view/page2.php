<?php
session_start();

echo $_SESSION["name"];
?>

<a href = "../control/logout.php"><br>Log Out</br></a>