<?php

session_start();

$hasError=0;

$passwordError=" ";
if(isset($_REQUEST["submit"])){
$name=$_REQUEST["fname"];
if(empty($name)){
    $hasError=1;
    echo"<br>Your first name should not be empty";
}
else if(strlen($name)<4)
{
    echo "<br>First name should be more than 4 characters";
}
else{
    $_SESSION["fname"] = $name;
    echo"<br>Your first name is ".$name;
}
$name2=$_REQUEST["lname"];
if(strlen($name2)<4)
if(empty($name2)){
    $hasError=1;
    echo"<br>Your last name should not be empty";
}
else if(strlen($name2)<4)
{
    echo "<br>Last name should be more than 4 characters";
}
else{
    $_SESSION["lanme"] = $name2;
    echo"<br>Your Last name is ".$name2;
}

if($hasError==0)
{
    header("Location: ../view/page3.php");
}


}
?>