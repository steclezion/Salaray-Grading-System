<!DOCTYPE html>
<html lang="en">
	<head>
		<?php  include("session.php");?>
			<?php  include("header.php");?>
			<?php  include("dbcon.php");?>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title> Grading Software</title>
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

	<body>
		
		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
						<small class="text-error"> Salary Grading System</small>
						<img class="text-error" src="dummy/" alt="RCC">
					</a> <!-- #branding -->
					
							<nav class="main-navigation">
						<button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item  current-menu-item"><a href="dashbaord.php">Home</a></li>
							<li class="menu-item "><a href="salary_calculation.php">Salary calulation</a></li>
							<li class="menu-item"><a href="assign_grade.php">Assign Grade</a></li>
								<li class="menu-item"><a href="job_strucure.php">Job Structure</a></li>
							<li class="menu-item"><a href="Set_Parameter.php">Set Parameter</a></li>
							<li class="menu-item"><a href="Set_Salary_Value.php">Set Salary Value</a></li>
			
							<li class="menu-item"><a href="logout.php">Logout</a></li>
						</ul><!-- .menu -->
					</nav> <!-- .main-navigation -->
					<div class="mobile-menu"></div>
				</div>
			</header> <!-- .site-header -->
			
			<main class="main-content">
				
						
								

							<br/><br/><br/>
<div class="jumbotron">
  <div class="container text-center">
   <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">	<img src="images/" alt=""></div>
 
    </div>
</div>
    <h1>THE STATE OF ERITREA</h1>      
	<h2><span class="alert badge-inverse">POWERED BY steclezion@gmail.com</span></h3>   
    <p>PERSON LOGED IN <div class="alert alert-danger"><?PHP $Today = date('y:m:d');
								$new = date('l, F d, Y', strtotime($Today));
							   $year=date('Y', strtotime($Today));
						
								$id=$_SESSION['id'];$query=mysql_query("select First_name,Middle_Name,Last_Name from users where id='$id' ");  
								$fetch=mysql_fetch_array($query); echo  $fetch[0]." ".$fetch[1]." ".$fetch[ 2]." ". $new;  ?></div></p>
  </div>
</div>
							</div>
						</div>
					</div>
				</div> <!-- .testimonial-section -->

				
			</main> <!-- .main-content -->

		<?php include("footer.php");  ?>

		</div> <!-- #site-content -->

		<script src="js/jquery-1.11.1.min.js"></script>		
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>