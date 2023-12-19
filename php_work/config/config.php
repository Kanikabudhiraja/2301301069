<?php

ini_set("display_errors",1);
session_start();
$hostname="localhost";
$username="root";
$password="";
$database="bms";

// $conn= new mysqli($hostname,$username, $password, $database);
$conn= new mysqli("localhost","root","","bms");
 if($conn->connect_error)
{
   // echo'failed';
}
else
{
   // echo'pass';
}

?>