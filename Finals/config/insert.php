<?php 
include "db_conn.php";

if(isset($_POST['submit'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$position = $_POST['position'];
$status = $_POST['status'];

$sql = "insert into `db_system` (userID, username, password, Fname, Lname, position, status)VALUES
(NULL,'{$username}','{$password}','{$Fname}','{$Lname}','{$position}','{$status}')";

if($conn->query($sql)===TRUE){
	   header("location: ../admin/user_mgt.php");
   }else{
	   echo"ERROR".$sql."<br>".$conn->error;
   }
}


?>