<!DOCTYPE html>
<html lang="en">
	<head>
	<?php  include("header.php");?>
		<?php  //include("session.php");?>
	<script type="text/javascript">
 function showhide(id) {
    var e = document.getElementById(id);
    e.style.display = (e.style.display == 'block') ? 'none' : 'block';
 }
</script>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title> Grading Salary</title>
		<!-- Loading third party fonts -->
		
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
			<link rel="shortcut icon" href="dummy/logo.png ">
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>

	<body class="header-collapse">
		
		<div id="site-content">
		
			<header class="site-header">
				<div class="container">
					<a href="index.php" id="branding" class="text-error">
						<img class="text-error" src="dummy/" alt=" Salary Grading System">
						<small  class="text-error">Resource Coordinating Center</small>				</a> <!-- #branding -->
					
<nav class="main-navigation">
						<button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
						 <!-- .menu -->
					</nav> <!-- .main-navigation -->
					<div class="mobile-menu"></div>
				</div>
				
		  </header> <!-- .site-header -->
			

		  
									

			<div class="hero">
			
				<div class="slider">
					<ul class="slides">
						<li class="lazy-bg" data-background="dummy/slide-2.jpg">
								<div class="container">
									<h2 class="slide-title"> Salary Grading System</h2>
						
								<h3 class="slide-subtitle">Calculate Salary Grade</h3>
								
									<a href="javascript:showhide('salary_one')" class="button cut-corner">Login</a>
									<br><br><br>
									<div id="salary_one" style="display:none;">
					                <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					                <span style="color:YELLOW"> UserName:&nbsp;&nbsp;&nbsp;</span><input type="text" name="username">
									<span style="color:YELLOW">Password:&nbsp;&nbsp;&nbsp;</span><input type="password" name="password">
					                <span > <input type="submit" value="LogIn" name="submit"></span>
										
					                 </form>
		                                   </div>
									<?php
										include("dbcon.php");
								if (isset($_POST['submit'])){
								session_start();
								
								$username = $_POST['username'];
								$password = sha1($_POST['password']);
								
					$query = "SELECT * FROM users WHERE (user_Name='$username' AND Password='$password')";
								$result = mysql_query($query)or die(mysql_error());
								$num_row = mysql_num_rows($result);
									$row=mysql_fetch_array($result);
									if( $num_row > 0 ) {
									$Today = date('y:m:d');
							
							   $year=date('Y', strtotime($Today));
								$_SESSION['polino']=$row['id'];
								$_SESSION['start'] = time(); // Taking now logged in time.
                                    // Ending a session in 30 minutes from the starting time.
                                       $_SESSION['expire'] = $_SESSION['start'] + (30 * 60);
									 
		                                     $_SESSION['id']=$row['id'];
                                             header('location:dashbaord.php');
	
  }

		


                                  
									   
									   
									 
									  
						
									else{ ?>
								<div class="alert alert-danger">Access Denied</div>		
								<?php
								}}
								?>
					
					</ul>
				</div>
			</div>
			
			

<?php  include("footer.php"); ?>

		</div> <!-- #site-content -->

		<script src="js/jquery-1.11.1.min.js"></script>		
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
	</body>

</html>