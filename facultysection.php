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
					    
                    	<li><a href="facultysection.php">Faculty Users</a></li>
                    	
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->
        		
                
                <!-- h2 stays for breadcrumbs -->
                <h3 align="center">Faculty Section : Manage Website Users</h3>
              
                <div id="main">
				</br>
				<div class="panel-body">
                <div class="table-responsive">
				<table class="table1" border="1px" width="100%">
				<tr>
				<th align="center">Id</th>
				<th align="center">Username</th>
				<th align="center">Password</th>
				
				
				</tr> 
			</br>
		      <?php
				$con = mysqli_connect("localhost", "bvteckbs_student", "student","bvteckbs_studentattendance") ;
				$query = mysqli_query($con,"Select * from website_users"); // SQL Query
				while($row = mysqli_fetch_array($query))
				{
					
					Print "<tr>";
						Print '<td align="center"  >'. $row['id'] . "</td>";
						Print '<td align="center"  >'. $row['username'] . "</td>";
						Print '<td align="center"  >'. $row['password'] . "</td>";
						
					   
						
					Print "</tr>";
				}
			?>
			</table>
		</div>
		</div>
                	
                </div>
                <!-- // #main -->
                
                <div class="clear"></div>
            </div>
            <!-- // #container -->
        </div>	
        <!-- // #containerHolder -->
        
        
    </div>
    <!-- // #wrapper -->
	
	<script>
			function myAddSubCatFunction(id)
			{
			window.location.assign("assignlecturesToteachers.php?id=" + id);
			  }
		</script>
</body>
</html>




