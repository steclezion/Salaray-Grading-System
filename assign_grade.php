<?php  include("header.php");?>
<?php  include("session.php");?>
			
			<?php  include("dbcon.php");?>

<html lang="en">
	<head>
<script>
	function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

    document.body.innerHTML = originalContents;
	window.refresh();
}

</script>

		
		<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title> Grading Salary</title>
		
		<!-- Loading third party fonts -->
		
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
					<a href="index.php" id="branding" class="text-error">
						<small class="text-error"> Salary Grading System</small>
						<img class="text-error" src="dummy/" alt="RCC">	
						</a> <!-- #branding -->
					
							<nav class="main-navigation">
						<button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="dashbaord.php">Home</a></li>
							<li class="menu-item "><a href="salary_calculation.php">Salary calulation</a></li>
							<li class="menu-item  current-menu-item"><a href="assign_grade.php">Assign Grade</a></li>
								<li class="menu-item "><a href="job_strucure.php">Job Structure</a></li>
							<li class="menu-item"><a href="Set_Parameter.php">Set Parameter</a></li>
							<li class="menu-item"><a href="Set_Salary_Value.php">Set Salary Value</a></li>
			
							<li class="menu-item"><a href="logout.php">Logout</a></li>
						</ul><!-- .menu -->
					</nav> <!-- .main-navigation -->
					<div class="mobile-menu"></div>
				</div>
			</header> <!-- .site-header -->
			
			<main class="main-content">
				
				
		<div class="container">
		<div class="margin-top">
			
			<div class="row">		
	<div class="span12">





</div>
			<!-- Modal -->
<div class="span2">			     
										<ul class="nav nav-tabs nav-stacked">
									<li class="alert btn-inverse">
											<a href="#add_job_title" data-toggle="modal" ><i style="color:white"class="icon-plus icon-large"></i>&nbsp;<strong style="color:white" >GRADE A JOB</strong></a>
											
											</li>
										</ul>
										
										 
     <!-- Modal add role -->
	<?php include('modal_add_job_title.php'); ?>
										
			</div>
				

			<div class="span" id="Mom">
			
			
					
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered"  id="example" >
                                <div class="alert btn-inverse">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-role icon-large" style="color:white">JOB TITLE TABLE </i></strong>
                                </div>
                                <thead>
                                    <tr >
									      
										       <th>ID</th>     
											   <th>jOB Title</th>
											 
											   <th>PHD</th>
									          <th>Masters</th>
											   <th>First Degree</th>
										       <th>Diploma</th>	
                                               <th>Certificate</th>											   
									           <th>Highschool</th>
											   <th>Junior</th>
											   <th>Elementary</th>
											   <th>Illeterate</th>
											    <th>Action</th>              
                                            </tr>
                                </thead>
                                <tbody>
								
<?php $role_query=mysql_query("SELECT * FROM  `grade_job_title` ORDER BY  `grade_job_title`.`id` ASC LIMIT 0 , 500")or die(mysql_error());
								        
									while($row=mysql_fetch_array($role_query))
								
									{ 
									$id=$row['id']; ?>
									 <tr class="del<?php echo $id ?>">
									 <td><?php echo $row[3]; ?></td> 
									 <td><?php echo $row[2]; ?></td> 
									 <td><?php echo $row[1]; ?></td> 
								     <td><?php echo $row[11]; ?></td> 
									 <td><?php echo $row[10]; ?></td> 
							    	 <td><?php echo $row[9]; ?></td> 
									 <td><?php echo $row[8]; ?></td> 
									 <td><?php echo $row[7]; ?></td>
	                                 <td><?php echo $row[6]; ?></td> 		
	                                 <td><?php echo $row[5]; ?></td> 
	                                 <td><?php echo $row[4]; ?></td> 
								  	
	 
									 
								    <td>
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>"  href="#delete_Job_title<?php echo $id; ?>" data-toggle="modal"  class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_job_title_modal.php'); ?>
										
										<a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="#edit<?php echo $id; ?>" data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                	<?php include('modal_edit_job_title.php'); ?>  
									</td>
									</td>
									<?php include('toolttip_edit_delete.php'); ?>
									     <!-- Modal edit role -->
								
                                    </tr>
									<?php } ?>
                           
                                </tbody>
                            </table>
			
							

        </div>

			
    </div>    
	
			

	</div>
	
	</div>

<div  class="container">   
		<form action="function.php" method="POST">
		<div class="pull-left">
	    <input  class='alert btn-danger' type="button" onClick="printDiv('Mom')" value="Print/Pdf" />
		<input  type="submit" name="Export"  class='alert btn-primary'  value="Excel" />
					  <input  type="submit" name="rtf"  class='alert btn-primary'  value="RTF(Ritch Text Format)" />
					 
		         </div>                                                                                
                                </form>   
							
								</div>

<?php include("footer.php");  ?>
			
	
		
	
	

	
