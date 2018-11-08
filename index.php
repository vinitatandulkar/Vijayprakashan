<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Faculty Login</title>
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
                <h2> Faculty Admin : Login</h2>
               
                <h5>College Of Engineering</h5>
                 <br />
            </div>
        </div>
    
	
	<div class="login">
	
	 <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
	  <div class="panel panel-default">
	  <div class="panel-heading">
      <strong>   Enter Details To Login </strong>  
      </div>
	   <div class="panel-body">
      <form role="form" method="post" action="checklogin.php">
	  <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="username" class="form-control" placeholder="Your Username " required="required" />
                                        </div>
										
										<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="password" class="form-control"  placeholder="Your Password" required="required" />
                                        </div>
        
      
        
		<p class="submit"><input type="submit" name="commit" value="Login"></p>
		 
		
		</form>
		<hr />
		 Not register ? <a href="register.php" >click here </a> 
	  </div>
	  
	  </div>
    </div>
	    </div>


  
   <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

 </div> 
</body>
</html>