	
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title> Grading Salary</title>
		<!-- Loading third party fonts -->
			<link rel="shortcut icon" href="dummy/logo.png ">
		
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		<link rel="shortcut icon" href="">
		
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
						<img src="dummy/logo.png" alt="Site Title">
						<small class="site-description"> Salary Grading Software</small>
					</a> <!-- #branding -->
					
					<nav class="main-navigation">
						<button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="dashbaord.php">Home</a></li>
							<li class="menu-item"><a href="salary_calculation.php">Salary calulation</a></li>
							<li class="menu-item"><a href="assign_grade.php">Assign Grade</a></li>
							<li class="menu-item"><a href="job_strucure.php">Job Structure</a></li>
							<li class="menu-item  current-menu-item"><a href="Set_Parameter.php">Set Parameter</a></li>
							
							<li class="menu-item"><a href="Set_Salary_Value.php">Set Salary Value</a></li>
							<li class="menu-item"><a href="55525e1b3dfd8787fd202aed45fb04494e3242d0.php">Logout</a></li>
							
						</ul><!-- .menu -->
					</nav> <!-- .main-navigation -->
					<div class="mobile-menu"></div>
				</div>
			</header> <!-- .site-header -->
				   <!-- Modal add role -->
	<?php include('modal_add_job_title.php'); ?>