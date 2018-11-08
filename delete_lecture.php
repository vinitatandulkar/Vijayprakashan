<?php
	
	session_start(); //starts the session
	if($_SESSION['user']){ //checks if user is logged in
	}
	else{
		header("location:index.php"); // redirects if user is not logged in
	}
	$user = $_SESSION['user']; //assigns user value
	
	if($_SERVER['REQUEST_METHOD'] == "GET")
	{
		$con = mysqli_connect("localhost", "bvteckbs_student", "student","bvteckbs_studentattendance") ;
		$id = $_GET['id'];
		$result = mysqli_query($con, "DELETE FROM lectures_info WHERE id='$id'");
		if (!mysqli_query($con,$result)) {
		  die('Error: ' . mysqli_error($con));
		}
		echo "1 record added";
		
		mysqli_close($con);
		header("location: managelectures.php");
	}
?>