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

<?php
$k = intval($_GET['k']);

 include('dbcon.php');


							
								


?>
		<div class="control-group">
				<label class="control-label" for="inputEmail">Salary For selected Job </label>
				<div class="controls">
			
					
	<?php


$lqs="SELECT * FROM salary where Grade = '".$k."'";
$chinez=mysql_query($lqs);
     ?>
	
<select name='salary' required  >
	  
	
	    <?php while($row_jobb=mysql_fetch_array($chinez)) {  ?>
		  
		<option style="color:BLACK"value="<?php echo $row_jobb[2]; ?>"><?php echo $row_jobb[0]; ?> </option>
	               
					    
							 <?php 
						 
						 }  
						 ?>
						 
						   </select>
			
				</div>
			</div>
</body>
</html>