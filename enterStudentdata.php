<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){	
	 $bool = true;
	$con = mysqli_connect("localhost", "bvteckbs_student", "student","bvteckbs_studentattendance") ;
	$student_name = mysqli_real_escape_string($con,$_POST['student_name']);
	$student_id = mysqli_real_escape_string($con,$_POST['student_id']);
	$student_faculty = mysqli_real_escape_string($con,$_POST['student_faculty']);
	$student_semester = mysqli_real_escape_string($con,$_POST['student_semester']);
	$student_roll_number = mysqli_real_escape_string($con,$_POST['student_roll_number']);
	$query = mysqli_query($con,"Select * from students_info"); //Query the users table
	while($row = mysqli_fetch_array($query)) //display all rows from query
	{
		$student_id_database = $row['student_id']; // the first username row is passed on to $table_users, and so on until the query is finished
		if($student_id == $student_id_database) // checks if there are any matching fields
		{
			$bool = false; // sets bool to false
			Print '<script>alert("This timing has been taken!");</script>'; //Prompts the user
			Print '<script>window.location.assign("studentsection.php");</script>'; // redirects to register.php
		}
	}
	if($bool = true) // checks if bool is true
	{
		$result = mysqli_query($con,"INSERT INTO students_info (student_name,student_id, student_faculty_name,student_semester,student_roll_number) VALUES ('$student_name','$student_id','$student_faculty','$student_semester','$student_roll_number')"); //Inserts the value to table users
		
		
		Print '<script>alert("Successfully Assigned!");</script>'; // Prompts the user
		Print '<script>window.location.assign("studentsection.php");</script>'; // redirects to register.php
		
		
		if (!mysqli_query($con,$result)) {
		  die('Error: ' . mysqli_error($con));
		}
		echo "1 record added";
		
		mysqli_close($con);
		
	}
	
}
?>