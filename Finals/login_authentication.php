<?php
	session_start();
	include 'db_conn.php'
	$username = $POST['username'];
	$password = $POST['password'];
	
	$sql = "SELECT * FROM users where username='{$username}' and password ='{$password}'";
	
	$result = $conn->query($sqlLogin);
	
	if ($result -> num_rows > 0){
		while ($rowUserLogin = $result->fetch_assoc()){
			$_SESSION['ActiveUser'] = $rowUserLogin['userID'];
			$_SESSION['onSession'] = 1;
		if($rowUserLogin['Position'] == 1 ){
			$_SESSION['activePosition'] = 1 ;
			header("Location:../admin/dashboard.php");
		}
		}
		
	}else{
		header("Location:../user/employee.php");
	    }
	}
?>