<?php

session_start();
$hasError=0;

$passwordError=" ";
if(isset($_REQUEST["submit"])){

if(isset($_REQUEST["des"]))
{
    $des=$_REQUEST["des"];
    echo "<br>Your designation is ".$des;
}
else{
    $hasError=1;
    echo "<br>You must select designation";
}

if(isset($_REQUEST["pref1"]) || isset($_REQUEST["pref2"]) || isset($_REQUEST["pref3"]))
{
    if(isset($_REQUEST["pref1"]) && isset($_REQUEST["pref2"]) && isset($_REQUEST["pref3"]) ){
        echo "<br> You have selected ".$_REQUEST["pref1"]." and ".$_REQUEST["pref2"]." and ".$_REQUEST["pref3"];
        $prefdata = $_REQUEST["pref1"]."and" .$_REQUEST["pref2"]." and ".$_REQUEST["pref3"];
    }
    else if(isset($_REQUEST["pref1"]) && isset($_REQUEST["pref2"])){
        echo "<br> You have selected ".$_REQUEST["pref1"]." and ".$_REQUEST["pref2"];
        $prefdata = $_REQUEST["pref1"]."and" .$_REQUEST["pref2"];
    }
    else if(isset($_REQUEST["pref2"]) && isset($_REQUEST["pref3"])){
        echo "<br> You have selected ".$_REQUEST["pref2"]." and ".$_REQUEST["pref3"];
        $prefdata = $_REQUEST["pref2"]." and ".$_REQUEST["pref3"];
    }
    else if(isset($_REQUEST["pref1"]) && isset($_REQUEST["pref3"])){
        echo "<br> You have selected ".$_REQUEST["pref1"]." and ".$_REQUEST["pref3"];
        $prefdata = $_REQUEST["pref1"]." and ".$_REQUEST["pref3"];
    }
    else if(isset($_REQUEST["pref1"])){
        echo "<br> You have selected ".$_REQUEST["pref1"];
        $prefdata = $_REQUEST["pref1"];
    }
    else if(isset($_REQUEST["pref2"])){
        echo "<br> You have selected ".$_REQUEST["pref2"];
        $prefdata = $_REQUEST["pref2"];
    }
    else{
        echo "<br> You have selected ".$_REQUEST["pref3"];
        $prefdata = $_REQUEST["pref3"];
    }
}
else{
    $hasError=1;
    echo "<br>You must select preferance";
}

if(empty($_REQUEST["email"])){
    $hasError=1;
    echo "<br>Email should not be empty";
}
else{
    echo "<br>Your email is :".$_REQUEST["email"];
}

echo "<br>".$_FILES["myfile"]["name"];
if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../uploads/".$_FILES["myfile"]["name"]))
{
    echo "<br>File uploaded";
}
else{
    echo "<br>File not uploaded";
}

if($hasError==0)
{
    header("Location: ../view/page4.php");
}

}

?>