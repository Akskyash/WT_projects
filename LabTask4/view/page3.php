<?php
include("../control/process2.php");

?>

<html>
    <head>
        <title>Next Page3</title>
</head>
<body>

    <h1>Form</h1>
     <form action="" method="POST" enctype= "multipart/form-data">
         <table>
             
       <tr><td>Age:</td> 
       <td> <input type="text"  name="age"></td></tr>
       

       <tr><td>Designation:</td>
       <td><input type="radio" name="des" value="Junior Programmer">Junior Programmer 
       <input type="radio" name="des" value="Senior Programmer">Senior Programmer 
       <input type="radio" name="des" value="Project Lead">Project Lead</td></tr>
        

        <tr><td>Preferred Language:</td>
       <td><input type="checkbox" name="pref1" value="JAVA">Java 
       <input type="checkbox" name="pref2" value="PHP">PHP 
       <input type="checkbox" name="pref3" value="C++">C++</td></tr>

       <tr><td>Email:</td> 
       <td> <input type="text"  name="email"></td></tr>

       <tr><td>Please choose file </td>
        <td><input type="file"  name="myfile"></td></tr>
       
       <tr><td><input type="submit" name="submit" value="Submit">
        <input type="submit" name="submit" value="Reset"></td></tr>

</table>

</form>

</body>
</html>