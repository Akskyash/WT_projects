<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}

include("adminprocess2.php");
$HasError=0;
$usernameError="";
$userPass_Error="";

$ad_data = file_get_contents('../data/addata.json');
$decoded_data = json_decode($ad_data);

if (isset($_POST["adsubmit"])) {
    foreach ($decoded_data as  $key => $udata) {
        if ( $udata->Username == $_POST["aduname"]  && $udata->Password == $_POST["adpassword"]) {

            $_SESSION["adUser_name"] = $_POST["aduname"];
            
            $_SESSION["adPassword"] = $_POST["adpassword"];
             if (!empty($_SESSION["adUser_name"]))
             {
                header("Location: ../view/adminhome.php");
             }
        }
        if(empty($_REQUEST["aduname"])||(empty($_REQUEST["adpassword"])))
            {
                $usernameError= "Enter your username and password";
            }
            else{
                $hasError=1;
            }   
        }
    if($hasError==1){
        $userPass_Error= "Incorrect Username or Password";
    }
}
?>
