<?php
class DB
{
    function opencon()
    {
        $DBHostname="localhost";
        $DBUsername="root";
        $DBPass="";
        $DBName="labtask";
        
        $conn=new mysqli($DBHostname, $DBUsername, $DBPass, $DBName);
        
        if($conn->connect_error)
        {
            echo "Conn did not create".$conn->connect_error;
        }
        return $conn;
    }
    
    function InsertData($fname, $lname, $age, $designation, $planguage, $email, $password, $picture, $tablename, $conn)
    {
        $sqlstr="INSERT INTO $tablename(fname, lname, age, designation, planguage, email, password, picture) VALUES ('$fname', '$lname', $age, '$designation', '$planguage', '$email', '$password', '$picture')";
        
        if($conn->query($sqlstr)==TRUE)
        {
            echo "Data Inserted Successfully";
        }
        else
        {
            echo "!Error: Data didnt Inserted".$conn->err;
        }
    }
    
    function showUser($tablename, $conn)
    {
        $sqlstr="SELECT * FROM $tablename";
        return $conn->query($sqlstr);
    }
    
    function closecon($conn)
    {
        $conn->close();
    }

}

?>