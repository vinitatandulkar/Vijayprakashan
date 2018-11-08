<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$con = mysqli_connect("localhost", "bvteckbs_student", "student","bvteckbs_studentattendance") ;

		// Check connection
		if (mysqli_connect_errno()) {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		
	$bool = true;
	$teacher_name = mysqli_real_escape_string($con,$_POST['teacher_name']);
	$teacher_subject = mysqli_real_escape_string($con,$_POST['teacher_subject']);
	$teacher_id = mysqli_real_escape_string($con,$_POST['teacher_id']);
	$teacher_pass = mysqli_real_escape_string($con,$_POST['teacher_pass']);

	$query = mysqli_query($con,"Select * from teacher_info"); //Query the users table
	while($row = mysqli_fetch_array($query)) //display all rows from query
	{
		$teacher_id_database = $row['teacher_id']; // the first username row is passed on to $table_users, and so on until the query is finished
		if($teacher_id == $teacher_id_database) // checks if there are a$reany matching fields
		{
			$bool = false; // sets bool to false
			Print '<script>alert("Username has been taken!");</script>'; //Prompts the user
			Print '<script>window.location.assign("index.php");</script>'; // redirects to register.php
		}
	}
	if($bool = true) // checks if bool is true
	{
		$result = mysqli_query($con,"INSERT INTO teacher_info (teacher_name, teacher_subject,teacher_id,teacher_pass) VALUES ('$teacher_name','$teacher_subject','$teacher_id','$teacher_pass')"); //Inserts the value to table users
		if (!mysqli_query($con,$result)) {
		  die('Error: ' . mysqli_error($con));
		}
		echo "1 record added";
		
		mysqli_close($con);
		
		Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
		Print '<script>window.location.assign("index.php");</script>'; // redirects to register.php
		
	}
	
}
?>