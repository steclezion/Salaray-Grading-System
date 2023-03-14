<!DOCTYPE html>
<html lang="en">
	<head>
<script>
	function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}

</script>

		<?php  include("session.php");?>
			<?php  include("header.php");?>
			<?php  include("dbcon.php");?>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title> Grading Software</title>
			<link rel="shortcut icon" href="dummy/logo.png ">
		<!-- Loading third party fonts -->
		
	
		<link rel="stylesheet" href="style.css">
		
		
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
							<li class="menu-item"><a href="dashbaord.php">Home</a></li>
							<li class="menu-item "><a href="salary_calculation.php">Salary calulation</a></li>
							<li class="menu-item"><a href="assign_grade.php">Assign Grade</a></li>
							<li class="menu-item"><a href="job_strucure.php">Job Structure</a></li>
							<li class="menu-item"><a href="Set_Parameter.php">Set Parameter</a></li>
							<li class="menu-item current-menu-item"><a href="Set_Salary_Value.php">Set Salary Value</a></li>
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
	
			<!-- Modal -->
<div class="span2" style="display:NONE">			     
										<ul class="nav nav-tabs nav-stacked">
									<li class="alert btn-danger">
											<a href="#add_job_title" data-toggle="modal" ><i style="color:white"class="icon-plus icon-large"></i>&nbsp;<strong style="color:white" >Add Job Title</strong></a>
											
											</li>
										</ul>
										
										 

										
			</div>
				

			<div class="well well-sm" id="Mom">
			
			
					
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                                <div class="alert btn-danger">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-role icon-large" style="color:white"> Set Salary Value </i></strong>
                                </div>
                                <thead>
                                    <tr>
									      
										       <th class="alert alert-inverse" style="color:BLACK">ID</th>   
 <th class="alert alert-inverse" style="color:BLACK"> Grade</th> 											   
											      <th class="alert alert-inverse" style="color:BLACK">Basic Salary</th>
									              <th class="alert alert-inverse" style="color:BLACK">Gross Salary</th>
                                                       
                                         
									
								
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php $role_query=mysql_query("select * from salary order by Grade DESC ")or die(mysql_error());
								        
									while($row=mysql_fetch_array($role_query))
								
									{ 
									$id=$row['id']; ?>
									 <tr class="del<?php echo $id ?>">
									   <td><?php echo $row[3]; ?></td> 
									   							    <td class="alert alert-inverse" style="color:BLACK"><?php echo $row[4]; ?></td> 
									 <td><?php echo $row[0]; ?></td> 
								     <td><?php echo $row[1]; ?></td> 
		
								    <td>
                                     
                                        <?php include('delete_salary_modal.php'); ?>
										
										<a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="#edit<?php echo $id; ?>" data-toggle="modal" class="btn btn-primary"><i class="icon-pencil icon-large"></i></a>
                                    <div class="span">		<?php include('modal_edit_salary.php'); ?>  </div>
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
						
	

	
		
	
	

	
