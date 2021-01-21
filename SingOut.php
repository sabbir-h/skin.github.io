<?php
	
	session_start();
	
	if(isset($__SESSION['uname'])){
	session_destroy();
	header("location:home.php");
	}
	else{
		header("location:home.php");
	}
	
?>