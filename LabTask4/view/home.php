<?php
include("../control/process.php");

?>

<html>
    <head>
        <title>Registration</title>
</head>
<body>

    <h1>Registration Form</h1>
     <form action="" method="POST" enctype= "multipart/form-data">
         <table>
             
         <tr><td>First Name:</td> 
       <td> <input type="text"  name="fname"></td></tr>
       <tr><td>Last Name:</td> 
       <td> <input type="text"  name="lname"></td></tr>
       <tr><td>Password:</td> 
       <td> <input type="password"  name="password"></td>
    <td><?php
    echo $passwordError;
    ?> </td>
    </tr>
    
       <tr><td><input type="submit" name="submit" value="Next">
        <input type="submit" name="submit" value="Reset"></td></tr>

</table>

</form>

</body>
</html>