<?php
//admin folder
 session_start();
 
//page restriction
   $active =  $_SESSION['activeOn'];
	   if($active!=TRUE){
		   header("location: ../index.php");
	   }
	   
   $position = $_SESSION['PS'];
	   if($position!=1){
		   header("location: ../index.php"); 
	   }
//page restriction end	




?>