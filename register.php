<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Faculty Registration</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>

    <body>
	<div class="container">
	
	 <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> Faculty Admin : Register</h2>
               
                <h5>College Of Engineering</h5>
                 <br />
            </div>
        </div>
	
	<div class="register">
	
	 <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
	  <div class="panel panel-default">
	   <div class="panel-heading">
      <strong>   Enter Details To Register </strong>  
      </div>
	<div class="panel-body">
	<form method="post" action="register.php">
        <p align="center"><input type="text" name="username" value="" placeholder="Username or Email"></p>
        <p align="center"><input type="password" name="password" value="" placeholder="Password"></p>
        <p align="center" class="submit"><input type="submit" name="commit" value="Register"></p>
		
		</form>
		</div>
		</div>
		</div>
	</div>
    
	</div>
    </body>
</html>

<?php



if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$con = mysqli_connect("localhost", "bvteckbs_student", "student","bvteckbs_studentattendance") ;

		// Check connection
		if (mysqli_connect_errno()) {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		$bool = true;
		$username = mysqli_real_escape_string($con,$_POST['username']);
		$password = mysqli_real_escape_string($con,$_POST['password']);
		$query = mysqli_query($con,"select * from website_users");
	
	while($row = mysqli_fetch_array($query)) //display all rows from query
	{
		$table_website_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
		if($username == $table_website_users) // checks if there are any matching fields
		{
			$bool = false; // sets bool to false
			Print '<script>alert("Username has been taken!");</script>'; //Prompts the user
			Print '<script>window.location.assign("index.php");</script>'; // redirects to register.php
		}
	}
	if($bool = true) // checks if bool is true
	{
		$result = mysqli_query($con,"INSERT INTO website_users (username, password) VALUES ('$username','$password')"); //Inserts the value to table users
		Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
		Print '<script>window.location.assign("index.php");</script>'; // redirects to register.php
		
		if (!mysqli_query($con,$result)) {
		  die('Error: ' . mysqli_error($con));
		}
		echo "1 record added";
		
		mysqli_close($con);

	}
	
}
?>