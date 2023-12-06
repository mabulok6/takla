<?php

$servername= "localhost";
$username= "root";
$password= "";
$dbname= "db_system";

$conn = new mysqli ($servername, $username, $password, $dbname);

if($conn->connect_error){
	   die("error".$conn->connect_error);
   }else{
	   #echo"connect okay";
   }






?>


