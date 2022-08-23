<?php
include("../control/adminprocess2.php");
?>
<html>
     <center>
<head>   
    <title>Registration</title>
</head>
<body>

<img src="../image/reg.jpg" width="1400" height="400">

<h2>Registration Form</h2><hr><br>

<form action="" method="POST" enctype="multipart/form-data">
<table>

    <tr><td>Full Name : </td> 
    <td><input type="text" placeholder="" name="adname"></td>
    <td> <?php
            echo $Error_f_name;
       ?>
       </td></tr>
       <tr><td>Username : </td>
       <td><input type="text" placeholder="" name="adusname"></td>
       <td> <?php
            echo $Error_username;
       ?>
       </td></tr>
       <tr><td>Email : </td>
       <td><input type="text" placeholder="" name="ademail"></td>
       <td> <?php
            echo $Error_email;
       ?>
       </td></tr>
       <tr><td>Age : </td> 
       <td><input type="tel" placeholder="" name="adage"></td>
       <td> <?php
            echo $Error_age;
       ?>
       <tr><td>Date of Birth : </td> 
       <td><input type="date" placeholder="" name="adbirth"></td>
       <td> <?php
            echo $Error_date;
       ?>
        </td></tr>
       <tr><td>Password : </td>
       <td><input type="password" placeholder="" name="adpass"></td>

       <td> <?php
            echo $Error_pass;
       ?>
        </td></tr>
       <tr><td>Confirm Password : </td>
       <td><input type="password" placeholder="" name="adconfirmpass"></td>
       <td> <?php
            echo $Error_pass_cmp;
       ?>
        </td></tr>
       <tr><td>Gender : </td>
       <td><input type="radio" name="adgender" value="Male">Male
        <input type="radio" name="adgender" value="Female">Female</td>
        <td> <?php
            echo $Error_gender;
       ?>
      </td></tr>
      <tr><td>Upload NID or File : </td>
        <td><input type="file"  name="admyfile"></td></tr>
        <?php
            echo $Error_file;
       ?>
</table>
<br><input type="submit" name="submitRegad" value="Register">
       <input type="Reset" name="Resetad" value="Reset">
       
</form>
</body>
</center>
</html>