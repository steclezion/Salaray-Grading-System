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
$q = intval($_GET['q']);
	$Today = date('y:m:d');
	$new = date(' Y', strtotime($Today));
 include('dbcon.php');

  
$sql="SELECT * FROM establishment_entry   where  Establishment_Id='".$q."' ";
$sam=mysql_query($sql);
     ?>

	    <?php $row_sub_zoba=mysql_fetch_array($sam) ; ?>
		  
<button type="button" class="btn btn-danger"><?php echo $row_sub_zoba[3];  ?> <span class="badge"><?php echo $row_sub_zoba[0];  ?></span></button>
	               
					    
						
						 
						 
			
			
			
</body>
</html>