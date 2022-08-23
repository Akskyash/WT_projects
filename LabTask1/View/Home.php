<html>
    <head>
        <title>Form</title>
</head>
<body background color="sky blue">
    <h1>Registration Form</h1>
   
<form action= "../Control/Process.php" method="POST">
    <table>
    <tr><td>First Name: </td>
        <td><input type="text"></td></tr>
    <tr><td>Last Name: </td>
        <td><input type="text"></td></tr>
    <tr><td>Age: </td>
        <td><input type="number"></td></tr>
      <tr><td>Designation</td>
      <td><input type="radio" name="gender">Junior Programmer
      <input type="radio" name="gender">Senior Programmer
    <input type="radio" name="gender">Project Lead</td></tr>
    <tr><td>Preferred Language:</td>
      <td><input type="checkbox">JAVA
      <input type="checkbox">PHP
    <input type="checkbox">C++</td></tr>
    <tr><td>E-mail: </td>
        <td><input type="email"></td></tr>
    <tr><td> Password: </td>
      <td> <input type="password" ></td>

    <tr> <td>Please choose a file <input type = "button" value="Choose File"> No file choosen</td></tr>
    <tr><td><input type="submit" name="Submit">
    <input type="reset" name="Reset"></td></tr>

</table>
</form>

</body>
</html>
