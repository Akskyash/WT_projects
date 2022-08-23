<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}

if(isset($_SESSION["adUser_name"]))
{
    header("Location: ../view/adminhome.php");
}

$Error_f_name = "";
$Error_username = "";
$Error_email = "";
$Error_age = "";
$Error_date="";
$Error_pass = "";
$Error_pass_cmp = "";
$Error_gender = "";
$Error_gender = "";
$Error_file = "";
$hasError = 0;

if (isset($_REQUEST["submitRegad"])) {
    $fullname = $_REQUEST['adname'];
    $adusername = $_REQUEST['adusname'];
    $email = $_REQUEST['ademail'];
    $age = $_REQUEST["adage"];
    $adpassword = $_REQUEST['adpass'];
    $confirmpassword = $_REQUEST['adconfirmpass'];
    
    if (empty($_REQUEST['adname']) || strlen($_REQUEST['adname']) < 2 || preg_match('~[0-9]+~', $_REQUEST['adname'])) {
        $Error_f_name = "Please enter a valid name";
        $hasError = 1;
    } else {
        $full_name = $_REQUEST['adname'];
    }
    if (!preg_match("/^[a-zA-Z0-9]{3,}$/", $adusername)) {
        $Error_username = "Inavlid Username";
        $hasError = 1;
    } else {
        $adusername = $_REQUEST['adusname'];
    }

    if (empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix" ,$email)) {
        $Error_email = "Invalid email";
        $hasError = 1;
    } else {
        $email = $_REQUEST['ademail'];
    }
    if (!preg_match("/^[0-50]+$/", $age)) {
        $Error_age = "Enter age";
        $hasError = 1;
    } else {
        $age = $_REQUEST["adage"];
    }
  
    $number    = preg_match('@[0-9]@', $adpassword);
   
    if ( !$number  || strlen($adpassword) < 4) {
        $Error_pass = 'Password should be at least 4 characters';
        $hasError = 1;
    } else {
        $adpassword = $_REQUEST['adpass'];
    }
    if (empty($confirmpassword)) {
        $Error_pass_cmp = "Enter your confirm password";
        $hasError = 1;
    } else if ($adpassword != $confirmpassword) {
        $Error_pass_cmp = "Incorrect confirm password";
        $hasError = 1;
    } else {
        $confirmpassword = $_REQUEST['adconfirmpass'];
    }
    if (isset($_POST["adgender"])) {
        $adgender = $_POST["adgender"];
    } else {
        $Error_gender = "Please select your gender";
        $hasError = 1;
    }

    if(move_uploaded_file($_FILES["admyfile"]["tmp_name"],"../upload/".$_FILES["admyfile"]["name"])){
        
    }
    else{
        $Error_file= "File not uploaded";
        $hasError = 1;
    }

    if ($hasError == 0) {
        $ad_data = array(
            'Fullname' => $fullname,
            'Username' => $adusername,
            'Email' => $email,
            'Age' => $age,
            'Password' => $adpassword,
            'Confrimpassword' => $confirmpassword,
            'Gender' => $adgender,
        );

        $existing_Data = file_get_contents('../data/addata.json');
        $ad_JsonData = json_decode($existing_Data);

        $ad_JsonData[] = $ad_data;
        $jsondata = json_encode($ad_JsonData, JSON_PRETTY_PRINT);
        if (file_put_contents("../data/addata.json", $jsondata)) {

            echo "<br>Registration successful";
        }
    } else {
        echo "Registration failed";
    }
}
?>