<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$con = mysqli_connect("localhost", "bvteckbs_student", "student","bvteckbs_studentattendance") ;
	$bool = true;
	$teacher_id = mysqli_real_escape_string($con,$_POST['teacher_id']);
	$teacher_name = mysqli_real_escape_string($con,$_POST['teacher_name']);
	$teacher_subject = mysqli_real_escape_string($con,$_POST['teacher_subject']);
	$day_of_lecture = mysqli_real_escape_string($con,$_POST['day_of_lecture']);
	$time_of_lecture = mysqli_real_escape_string($con,$_POST['time_of_lecture']);
	$class_name = mysqli_real_escape_string($con,$_POST['class_name']);
	$semester_name = mysqli_real_escape_string($con,$_POST['semester_name']);
	$no_of_students = mysqli_real_escape_string($con,$_POST['no_of_students']);
	
	 $bool = true;
	$query = mysqli_query($con,"Select * from lectures_info"); //Query the users table
	while($row = mysqli_fetch_array($query)) //display all rows from query
	{
		$time_of_lecture_database = $row['time_of_lecture']; // the first username row is passed on to $table_users, and so on until the query is finished
		if($time_of_lecture == $time_of_lecture_database) // checks if there are any matching fields
		{
			$bool = false; // sets bool to false
			Print '<script>alert("This timing has been taken!");</script>'; //Prompts the user
			Print '<script>window.location.assign("assignlecturesToteachers.php");</script>'; // redirects to register.php
		}
	}
	if($bool = true) // checks if bool is true
	{
		$result = mysqli_query($con,"INSERT INTO lectures_info (teacher_id,teacher_name, teacher_subject,day_of_lecture,time_of_lecture,class_name,semester_name,no_of_students) VALUES ('$teacher_id','$teacher_name','$teacher_subject','$day_of_lecture','$time_of_lecture','$class_name','$semester_name','$no_of_students')"); //Inserts the value to table users
		
		if (!mysqli_query($con,$result)) {
		  die('Error: ' . mysqli_error($con));
		}
		echo "1 record added";
		
		mysqli_close($con);
		Print '<script>alert("Successfully Assigned!");</script>'; // Prompts the user
		Print '<script>window.location.assign("assignlecturesToteachers.php");</script>'; // redirects to register.php
		
	}
	
}
?>