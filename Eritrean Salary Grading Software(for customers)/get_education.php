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
				<label class="control-label" for="inputEmail "style="color:YELLOW">Education </label>
				<div class="controls">
			
					
	<?php

$sql="SELECT * FROM grade_job_title where id='".$k."'  ";

$sam=mysql_query($sql);
$query2 = mysql_fetch_assoc($sam);
     ?>
	
<select name='education' required   >
	  
		<option value="" ></option>
	    <?php 
		  
		  
		  foreach($query2  as $key =>  $value  ){  
			  if($value > 0 && $key != "id" && $key != "Level_Three_ID"){
				echo '<option value='.$value.'>'.$key.' </option> ';
					}
			  }
		 ?>
						 
						   </select>
			
				</div>
			</div>
			     <div  class="control"  id="zoz"><b></b></div>
				 
</body>
</html>