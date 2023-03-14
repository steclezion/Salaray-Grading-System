 <?php
	include("dbcon.php");
	if(isset($_POST["Export"])){
	
	  $query = "select  *  from salary_excel";  
      $result = mysql_query($query); 
	  $num_rows= mysql_num_rows($result); 

	  if ( $num_rows > 0){
 
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=Salary_Calculated.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output,array('Grade','Basic Salary','four Till seven Years','Eight To Tweleve Years','Thirteen To Seventeen Years','Eighteen To Twenty Two Years','>22yrs') );  

    $query_result= mysql_query("select Grade,Basic_salary,4_7,8_12,13_17,18_22,22_larger from  salary_excel");

					
      while($Q = mysql_fetch_assoc($query_result))
      {  
           fputcsv($output, $Q );  
      }  
	  fclose($output);
  
	  }
  }
	  	else if(isset($_POST["rtf"])){
	
	 	  $query = "select  *  from salary_excel";  
      $result = mysql_query($query); 
	  $num_rows= mysql_num_rows($result); 

	  if ( $num_rows > 0){
 
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=Salary_Calculated.rtf');  
      $output = fopen("php://output", "w");  
      fputcsv($output,array('Grade','Basic Salary','four Till seven Years','Eight To Tweleve Years','Thirteen To Seventeen Years','Eighteen To Twenty Two Years','>22yrs') );  

    $query_result= mysql_query("select Grade,Basic_salary,4_7,8_12,13_17,18_22,22_larger from  salary_excel");

					
      while($Q = mysql_fetch_assoc($query_result))
      {  
           fputcsv($output, $Q );  
      }  
	  fclose($output);
  
	  }
  }
  	elseif(isset($_POST["Export_single"])){
	$psted=$_POST['sam'];
	  $query = "select  *  from salary_excel";  
      $result = mysql_query($query); 
	  $num_rows= mysql_num_rows($result); 

	  if ( $num_rows > 0){
 
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=Salary_Calculated.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output,array('Grade','Basic Salary','four Till seven Years','Eight To Tweleve Years','Thirteen To Seventeen Years','Eighteen To Twenty Two Years','>22yrs') );  

    $query_result= mysql_query("select Grade,Basic_salary,4_7,8_12,13_17,18_22,22_larger from  salary_excel where Grade='$psted'");

					
      while($Q = mysql_fetch_assoc($query_result))
      {  
           fputcsv($output, $Q );  
      }  
	  fclose($output);
  
	  }
  }
	 
	  
		
?>