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
						
<script>
function showTedishaa(str) {
  if (str=="") {
    document.getElementById("teddi").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("teddi").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","retrive_jobs_high.php?k="+str,true);
  xmlhttp.send();
}
function show_Salary(str) {
  if (str=="") {
    document.getElementById("samino").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("samino").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","getsalary.php?k="+str,true);
  xmlhttp.send();
}
</script>
		
 <script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
		<?php  include("session.php");?>
			<?php  include("header.php");?>
			<?php  include("dbcon.php");?>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title> Grading Software</title>
			<link rel="shortcut icon" href="dummy/logo.png ">
		<!-- Loading third party fonts -->
		
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
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
					<a href="#" id="branding">
						<small class="text-error"> Salary Grading System</small>
						<img class="text-error" src="dummy/" alt="RCC">
					</a> <!-- #branding -->
					
							<nav class="main-navigation">
						<button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="dashbaord.php">Home</a></li>
							<li class="menu-item "><a href="salary_calculation.php">Salary calulation</a></li>
							<li class="menu-item"><a href="assign_grade.php">Assign Grade</a></li>
								<li class="menu-item current-menu-item"><a href="job_strucure.php">Job Structure</a></li>
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
			<ul class="nav nav-pills">
									<li   class="active"><a href="job_strucure.php">Job Titile Assigned To Employee</a></li>
									</ul>     
			<div class="row">		
	<div class="span12">





</div>
			<!-- Modal -->

<div class="span2">			     
										<ul class="nav nav-tabs nav-stacked">
									<li class="alert btn-inverse">
											<div class="control-group">
				<label class="control-label" for="inputEmail">Add/Edit Job Classifications To</label>
				<div class="controls">
			
                  <select name='level_three_job' required  onchange="showTedishaa(this.value)" >
	  <option value=""> </option>
		<option value="level_one_job" >Highiest Job Structure</option>
	    <option value="level_two_job">Middle Job Structure</option>
		<option value="level_three_job">Lowest Job Structure</option>
	
		 
		
	               
					    
						
						   </select>
			
				</div>
				
			</div>
											
											</li>
										</ul>
										
										 

										
			</div>
				<br><br><br><br><br><br>
			
			
	<div id="teddi" >
<div class="span" >			     
<ul class="nav nav-tabs nav-stacked">
<li class="alert btn-success">
<a href="#add_job_title_least" data-toggle="modal" ><i style="color:white"class="icon-plus icon-large"></i>&nbsp;<strong style="color:white" >Add Job Professions</strong></a>
</li>
</ul>									
<!-- Modal add role -->
<?php include('modal_add_job_title_least.php'); ?>
</div>
				

			<div class="span" id="Mom">
			
			
					
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                                <div class="alert btn-success">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-role icon-large" style="color:white">Least Job Title Structure </i></strong>
                                </div>
                                <thead>
                                   <tr>
							                   <th class="alert badge-inverse" >ID</th>     
											   <th  class="alert badge-inverse">Highiest Heirarchy Job Title</th>
											   <th  class="alert badge-inverse">Meduim Heirarchy Job Title</th>
											   <th  class="alert badge-inverse">Lowest  Heirarchy Job Title</th>
											      <th  class="alert badge-inverse">Job Professions</th>
									           
                                               <th class="alert badge-inverse">Action</th>                       
                                  </tr>
                                </thead>
                                <tbody>
								 
                                  <?php $role_query=mysql_query("select * from grade_job_title  ")or die(mysql_error());
								        
									while($row=mysql_fetch_array($role_query))
								
								{ $di=$row['Level_Three_ID']; 
			$role_query_one=mysql_query("select * from level_three_job where  Level_Three_ID= '$di' ")or die(mysql_error());
			$row_one=mysql_fetch_array($role_query_one);$dii=$row_one[0];
			
					$role_query_two=mysql_query("select * from level_two_job where  Level_Two_ID= '$dii' ")or die(mysql_error());
					$row_two=mysql_fetch_array($role_query_two);$diii=$row_two[0];
									
		   $role_query_three=mysql_query("select * from level_one_job where  Level_One_ID= '$diii' ")or die(mysql_error());
		   $row_three=mysql_fetch_array($role_query_three);
									
						          	$id=$row['id']; 	 ?>
									 <tr class="del<?php echo $id ?>">
									    
									 <td class="well" style="color:RED"><?php echo $row[3]; ?></td> 
									 <td class="well" style="color:BLACK"><?php echo $row_three[1];?></td>  
									 <td class="well" style="color:BLACK"><?php echo $row_two[2]; ?></td> 
									  <td class="well" style="color:BLACK"><?php echo $row_one[2]; ?></td> 
								     <td  class="jumbotron"><?php $almu=$row[2];echo $row[2]; ?></td> 
							
								     <td>
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>"  href="#delete_Job_title_least<?php echo $id; ?>" data-toggle="modal"  class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_job_title_modal_least.php'); ?>
										
										<a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="#edit_sub_least<?php echo $id; ?>" data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                	<?php include('modal_edit_job_title_least.php'); ?>  
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
	
	</div>

	

	<br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/>
	
<?php include("footer.php");  ?>

	
	

	
