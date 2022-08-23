<?php
session_start();
if(isset($_SESSION["adUser_name"])){
    echo "Hello, ".$_SESSION["adUser_name"];  
}

if(empty($_SESSION["adUser_name"])){

    header("Location: ../view/adminlogin.php");
}
?>