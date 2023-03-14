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
				<label class="control-label" for="inputEmail">Job Title </label>
				<div class="controls">
			
					
	<?php

$sql="SELECT * FROM grade_job_title  where grade = '".$k."'";
$sam=mysql_query($sql);

     ?>
	
<select name='Job_Title' required onchange="show_Salary(this.value)"  >
	  
		<option value="" ></option>
	    <?php while($row_job=mysql_fetch_array($sam)) {  ?>
		  
		<option value="<?php echo $row_job[1]; ?>"><?php echo $row_job[2]; ?> </option>
	               
					    
							 <?php 
						 
						 }  
						 ?>
						 
						   </select>
			
				</div>
			</div>
			     <div  class="control"  id="samino"><b>.</b></div>
				 
</body>
</html>