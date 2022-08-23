<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
include("../control/adminprocess1.php");
?>
<html>
    <center>
<head>

    <title>Log In</title>
</head>
<body>
    
    <br>

    <img src="../image/Pic1.png" width="1400" height="400">
<h1>"Admin Login Pannel"</h1><hr>

<form action="" method="POST">
    <br>
    
<table>
    
    <tr><td>Username :</td> 
    <td><input type="text" name="aduname" placeholder="Enter username"></td>
    <td> <?php
            echo $usernameError;
       ?>
       </td></tr>
       <tr><td>Password :</td>
       <td><input type="password"name="adpassword"></td>
       <td> <?php
            echo $userPass_Error;
       ?>
       </td></tr>

</table>

<input type="submit" name="adsubmit" value="Log In">
<input type="Reset" name="Reset" value="Reset"><br>

<p><a href="adminregistration.php">New Registration</a>

</form>
</body>
<center>
</html>