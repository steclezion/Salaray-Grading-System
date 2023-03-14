<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
 <script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
</head>
<body>
<?php include("session.php");?>
<?php
$k = ($_GET['k']);

 include('dbcon.php');


		
	if($k=='level_one_job')
	{		


?>
	





<div class="span">			     
<ul class="nav nav-tabs nav-stacked">
<li class="alert btn-danger">
<a href="#add_job_title" data-toggle="modal" ><i style="color:white"class="icon-plus icon-large"></i>&nbsp;<strong style="color:white" >Add Highiest Job Structure</strong></a>
</li>
</ul>	
                               							
<!-- Modal add role -->
<?php include('modal_add_job_highiest.php'); ?>
</div>
				

			<div class="span" id="Mom">
			
			
					
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                                <div class="alert btn-danger">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-role icon-large" style="color:white">Highiest Job Structure</i></strong>
                                </div>
                                <thead>
                                    <tr>
							                   <th class="alert badge-inverse" >ID</th>     
											   <th  class="alert badge-inverse">Highiest Heirarchy Job Title</th>
									           <th  class="alert badge-inverse">Date Created</th>
                                               <th class="alert badge-inverse">Action</th>              
                                  </tr>
                                </thead>
                                <tbody>
								 
                                  <?php $role_query=mysql_query("select * from level_one_job  ")or die(mysql_error());
								        
									while($row=mysql_fetch_array($role_query))
								
									{ 
									$id=$row['Level_One_ID']; ?>
									 <tr class="del<?php echo $id ?>">
									   <td><?php echo $row[0]; ?></td> 
								       <td><?php echo $row[1]; ?></td> 
									   <td><?php echo $row[2]; ?></td> 
								    <td>
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>"  href="#delete_Job_title<?php echo $id; ?>" data-toggle="modal"  class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_job_title_highiest_modal.php'); ?>
										
										<a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="#edit<?php echo $id; ?>" data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                    <div class="span">		<?php include('modal_edit_job_title_highiest.php'); ?>  </div>
									</td>
									<?php include('toolttip_edit_delete.php'); ?>
									     <!-- Modal edit role -->
								
                                    </tr>
									<?php } ?>
                           
                                </tbody>
                            </table>
			
							

        </div>
	<?php } 
	

	elseif($k=='level_two_job')
	{		


?>
	





<div class="span">			     
<ul class="nav nav-tabs nav-stacked">
<li class="alert btn-warning">
<a href="#add_job_title" data-toggle="modal" ><i style="color:white"class="icon-plus icon-large"></i>&nbsp;<strong style="color:white" >Add Middle Job Structure</strong></a>
</li>
</ul>									
<!-- Modal add role -->
<?php include('modal_add_job_middle.php'); ?>
</div>
				

			<div class="span" id="Mom">
			
			
					
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                                <div class="alert btn-warning">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-role icon-large" style="color:white">Middle Job Structure</i></strong>
                                </div>
                                <thead>
                                    <tr>
							                   <th class="alert badge-inverse" >ID</th>     
											   <th  class="alert badge-inverse">Highiest Heirarchy Job Title</th>
											   <th  class="alert badge-inverse">Meduim Heirarchy Job Title</th>
									           <th  class="alert badge-inverse">Date Created</th>
                                               <th class="alert badge-inverse">Action</th>                       
                                  </tr>
                                </thead>
                                <tbody>
								 
                                  <?php $role_query=mysql_query("select * from level_two_job  order by Level_One_ID ")or die(mysql_error());
								       
									while($row=mysql_fetch_array($role_query))
								
									{ $di=$row['Level_One_ID']; 
									$role_query_one=mysql_query("select * from level_one_job where  Level_One_ID= '$di' ")or die(mysql_error());
									$row_one=mysql_fetch_array($role_query_one);
						          	$id=$row['Level_Two_ID']; 	 ?>
									 <tr class="del<?php echo $id ?>">
									   <td><?php echo $row[1]; ?></td> 
									   <td><?php echo $row_one[1]; ?></td> 
									 <td><?php echo $row[2]; ?></td> 
								     <td><?php echo $row[3]; ?></td> 
								    <td>
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>"  href="#delete_Job_title_middle<?php echo $id; ?>" data-toggle="modal"  class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_job_title_modal_middle.php'); ?>
										
										<a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="#edit<?php echo $id; ?>" data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                    <div class="span">		<?php include('modal_edit_job_title_middle.php'); ?>  </div>
									</td>
									<?php include('toolttip_edit_delete.php'); ?>
									     <!-- Modal edit role -->
								
                                    </tr>
									<?php } ?>
                           
                                </tbody>
                            </table>
			
							

        </div>
	<?php 
	} 
	
	elseif($k=='level_three_job')
	{		
?>
 <div id="teddi" >
<div class="span" >			     
<ul class="nav nav-tabs nav-stacked">
<li class="alert btn-primary">
<a href="#add_job_title_lowest" data-toggle="modal" ><i style="color:white"class="icon-plus icon-large"></i>&nbsp;<strong style="color:white" >Add Lowest Job Structure</strong></a>
</li>
</ul>									
<!-- Modal add role -->
<?php include('modal_add_job_title_lowest.php'); ?>
</div>
				

			<div class="span" id="Mom">
			
			
					
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                                <div class="alert btn-primary">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-role icon-large" style="color:white">Lowest Job Structure </i></strong>
                                </div>
                                <thead>
                                   <tr>
							                   <th class="alert badge-inverse" >ID</th>     
											   <th  class="alert badge-inverse">Highiest Heirarchy Job Title</th>
											   <th  class="alert badge-inverse">Meduim Heirarchy Job Title</th>
											   <th  class="alert badge-inverse">Lowest  Heirarchy Job Title</th>
									           <th  class="alert badge-inverse">Date Created</th>
                                               <th class="alert badge-inverse">Action</th>                       
                                  </tr>
                                </thead>
                                <tbody>
								 
                                  <?php $role_query=mysql_query("select * from level_three_job  ")or die(mysql_error());
								        
									while($row=mysql_fetch_array($role_query))
								
								{ $di=$row['Level_Two_ID']; 
									$role_query_one=mysql_query("select * from level_two_job where  Level_Two_ID= '$di' ")or die(mysql_error());
									$row_one=mysql_fetch_array($role_query_one);$dii=$row_one[0];
									$role_query_two=mysql_query("select * from level_one_job where  Level_One_ID= '$dii' ")or die(mysql_error());
									$row_two=mysql_fetch_array($role_query_two);
						          	$id=$row['Level_Three_ID']; 	 ?>
									 <tr class="del<?php echo $id ?>">
									   <td><?php echo $row[1]; ?></td> 
									   
									  <td><?php echo $row_two[1]; ?></td>  
									 <td><?php echo $row_one[2]; ?></td> 
								     <td><?php echo $row[2]; ?></td> 
									 <td><?php echo $row[3]; ?></td> 
								    <td>
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>"  href="#delete_Job_title_lowest<?php echo $id; ?>" data-toggle="modal"  class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_job_title_modal_lowest.php'); ?>
										
										<a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="#edit_sub<?php echo $id; ?>" data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                	<?php include('modal_edit_job_title_lowest.php'); ?>  
									</td>
									<?php include('toolttip_edit_delete.php'); ?>
									     <!-- Modal edit role -->
								
                                    </tr>
									<?php } ?>
                           
                                </tbody>
                            </table>
			
							

        </div>
	
	</div>
	
<?php 
	} 
	
?>
	

	


