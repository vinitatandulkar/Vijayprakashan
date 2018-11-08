<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>College Admin</title>

<!-- CSS -->
<link href="style/css/transdmin.css" rel="stylesheet" type="text/css" media="screen" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="screen" href="style/css/ie6.css" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="screen" href="style/css/ie7.css" /><![endif]-->

<!-- JavaScripts-->
<script type="text/javascript" src="style/js/jquery.js"></script>
<script type="text/javascript" src="style/js/jNice.js"></script>
</head>

<?php
	session_start(); //starts the session
	if($_SESSION['user']){ //checks if user is logged in
	}
	else{
		header("location:index.php"); // redirects if user is not logged in
	}
	$user = $_SESSION['user']; //assigns user value
	?>



<body>
	<div id="wrapper">
    	<!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->
    	<h1>Student Attendance Management System</h1>
        
        <!-- You can name the links with lowercase, they will be transformed to uppercase by CSS, we prefered to name them with uppercase to have the same effect with disabled stylesheet -->
        <ul id="mainNav">
        	
        	<li><a href="facultysection.php">Faculty Users</a></li>
        	<li><a href="addteachers.php">Teacher Section</a></li>
        	<li><a href="studentsection.php">Student Section</a></li>
			<li><a href="manageAttendance.php">Attendance Section</a></li>
        	<li class="logout"><a href="logout.php">LOGOUT</a></li>
        </ul>
        <!-- // #end mainNav -->
        
        <div id="containerHolder">
			<div id="container">
			<div id="sidebar">
                	<ul class="sideNav">
					     <li><a href="index.php" >Add Teachers</a></li>
                    	<li><a href="manageteachers.php">Manage Teachers</a></li>
                    	<li><a href="assignlecturesToteachers.php" class="active" >Assign Lectures</a></li>
						<li><a href="managelectures.php" >Manage Lectures</a></li>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->
        		
                
                <!-- h2 stays for breadcrumbs -->
                <h3 align="center">Teacher Section : Add Assignments</h3>
              
                <div id="main">
				<style>
				p{padding:0;margin:0;font-family:"Times New Roman", serif;
				letter-spacing: 1px;background-color:#f1f1f1;margin-bottom:5px;margin-top:5px;}
				legend{margin-top:10px;border:1px solid #444;padding:5px;margin-bottom:15px;background-color:#f1f1f1;}
				fieldset{width:300px;margin-left:20px;border:1px solid #444;padding:5px;}
				</style>
				
				
				
				<form action="enterLecturedata.php" method="POST" >
				</br></br>
				<fieldset >
				<legend>Assign Lecture</legend>
				<p>Enter Teacher Id</p> <input type="text" name="teacher_id" required="required" /> 
			   </br></br>
               <p>Enter Teacher Name</p> <input type="text" name="teacher_name" required="required" /> 
			   </br></br>
               <p>Enter Lecture Name</p> <input type="text" name="teacher_subject" required="required" /> 
			   </br></br>
		       <p>Enter Lecture Date</p> <input type="text" name="day_of_lecture" required="required" /> 
			   </br></br>
			   <p>Enter Lecture Time</p> <input type="text" name="time_of_lecture" required="required" /> 
			   </br></br>
			   <p>Enter Faculty Name</p><input type="text" name="class_name" required="required" /> 
			   </br></br>
			   <p>Enter Semester Name</p><input type="text" name="semester_name" required="required" /> 
			   </br></br>
			   <p>Enter No of Students</p> <input type="text" name="no_of_students" required="required" /> 
			   </br></br>
           
           <input type="submit" value="Assign"/>
		   </br></br>
		   </fieldset>
        </form>

                	
                </div>
                <!-- // #main -->
                
                <div class="clear"></div>
            </div>
            <!-- // #container -->
        </div>	
        <!-- // #containerHolder -->
        
        
    </div>
    <!-- // #wrapper -->
</body>
</html>




