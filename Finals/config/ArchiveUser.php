<?php
	include'db_conn.php';
	$status= $_POST['status'];
	$userID= $_POST['userID'];
	
	
	//add or update data
	
	$ArchiveUser= "UPDATE users SET status='INACTIVE' WHERE userID='{$userID}'";
	
	//checking of user update
	
	if {$conn->query($ArchiveUser) === TRUE ) {
		$_SESSION['UpdateMessage'] = "Update Successful" ;
		header("Location: ../admin/dashboard.php");
	}else{
		echo"error".$conn->error;
	
	}
	




?>