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
</head>
<body>
<?php include("session.php");?>
<?php
$k = intval($_GET['k']);

 include('dbcon.php');


							
								


?>
		<div class="control-group">
				<label class="control-label" for="inputEmail" style="color:YELLOW">Medium Structure of Job Title  </label>
				<div class="controls">
			
					
	<?php

$sql="SELECT * FROM level_two_job  where Level_One_ID = '".$k."'";
$sam=mysql_query($sql);

     ?>
	
<select name='level_two_job' required onchange=""  >
	  
		<option value="" ></option>
	    <?php while($row_job=mysql_fetch_array($sam)) {  ?>
		  
		<option value="<?php echo $row_job[1]; ?>"><?php echo $row_job[2]; ?> </option>
	               
					    
							 <?php 
						 
						 }  
						 ?>
						 
						   </select>
			
				</div>
			</div>
			    
				 
</body>
</html>