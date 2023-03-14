
<?php include("dbcon.php"); ?>
<?php
	if (isset($_POST['edit']))
	{
	$job_id = $_POST['Job_id'];
	$phd = $_POST['phd'];
	$Job_Title =$_POST['Job_title'];
	$master=$_POST['master'];
	$First_Degree=$_POST['First_Degree'];
	$Diploma=$_POST['Diploma'];
	$Certificate =$_POST['Certificate'];
	$highschool=$_POST['highschool'];
	$junior=$_POST['junior'];
	$Elementary=$_POST['Elementary'];
	$illtrate=$_POST['illtrate'];
	
mysql_query("update grade_job_title set PHD='$phd', Job_Titile='$Job_Title',ILLETRATE='$illtrate',JUNIOR='$junior',HIGHSCHOOL='$highschool',CERTIFICATE='$Certificate',DIPLOMA='$Diploma',FIRST_DEGREE='$First_Degree',MASTERS='$master',ELEMENTARY='$Elementary' where id='$job_id' ")or die(mysql_error()); 
?>
	<script>
	window.location="assign_grade.php";
	</script>
	<?php
	}
	
	elseif (isset($_POST['submit_add']))
	{

	$Grade =$_POST['Assign_Grade'];
 
	$Level_one_job =$_POST['Level_one_job'];
	
mysql_query("update grade_job_title set Grade='$Grade'  where id='$Level_one_job' ")or die(mysql_error()); 
	  ?>
		<script>
	window.location="assign_grade.php";
	</script>
	<?php
	}
		elseif (isset($_POST['edit_salary']))
	{
	$salary_id = $_POST['salary_id'];
	$Grade =$_POST['Grade_Number'];
	$Basic_Salary=$_POST['Basic_Salary'];
	$Gross_Salary=$_POST['Gross_Salary'];
	
	mysql_query("update salary set Basic_Salary='$Basic_Salary',Gross_Salary='$Gross_Salary',Grade='$Grade' where id='$salary_id'  ")or die(mysql_error());?>
	
	  
		<script>
	window.location="Set_Salary_Value.php";
	</script>
	<?php
	}
	elseif (isset($_POST['submit_add_high']))
	{
	$jobino_Title = $_POST['jobino_Title'];
	$level_three_ID = $_POST['ID'];

	
	mysql_query("insert into level_one_job (Level_One_ID,Level_one_Job_Class) values('$level_three_ID','$jobino_Title' )")or die(mysql_error());?>
	
	  
		<script>
	window.location="job_strucure.php";
	</script>
	<?php
	}
elseif (isset($_POST['Edit_Job_one']))
	{
	$Job_id = $_POST['Job_id'];
	$Job_title = $_POST['Job_title'];
	
	
	
	mysql_query("update level_one_job set Level_one_Job_Class='$Job_title'  where Level_One_ID='$Job_id'  ")or die(mysql_error());?>
	
	  
		<script>
	window.location="job_strucure.php";
	</script>
	<?php
	}
elseif (isset($_POST['submit_add_Middle']))
	{
	$jobino_Title = $_POST['jobino_Title'];
	$level_Two_ID = $_POST['ID'];
    $Level_one_job = $_POST['Level_one_job'];
	
	mysql_query("insert into level_two_job (Level_One_ID,Level_Two_ID,Level_Two_Job_Class) values('$Level_one_job','$level_Two_ID','$jobino_Title' )")or die(mysql_error());?>
	
	  
		<script>
	window.location="job_strucure.php";
	</script>
	<?php
	}
elseif (isset($_POST['Edit_Job_two']))
	{
	$Job_id = $_POST['Job_id'];
	$Level_one_job = $_POST['Level_one_job'];
	$Job_title = $_POST['Job_title'];
	
	
	
	mysql_query("update level_two_job set Level_Two_Job_Class='$Job_title',Level_One_ID='$Level_one_job'  where Level_Two_ID='$Job_id'  ")or die(mysql_error());?>
	
	  
		<script>
	window.location="job_strucure.php";
	</script>
	<?php
	}
	elseif (isset($_POST['submit_add_lowest']))
	{
	$jobino_Title = $_POST['jobino_Title'];
	$id= $_POST['ID'];
	$level_two_job=$_POST['level_two_job'];
    @$Level_three_job = $_POST['level_three_job_title'];
	
	mysql_query("insert into level_three_job (Level_Two_ID,Level_Three_ID,Level_Three_Job_Class) values('$level_two_job','$id','$jobino_Title' )")or die(mysql_error());?>
	
	  
		<script>
	window.location="job_strucure.php";
	</script>
	<?php
	}
	elseif (isset($_POST['Edit_Job_least']))
	{
	$Job_id = $_POST['Job_id'];
	$Level_three_job = $_POST['Level_three_job_id'];
	$Job_title = $_POST['Job_title'];
	
	
mysql_query("update grade_job_title set Level_Three_ID='$Level_three_job',Job_Titile='$Job_title'  where id='$Job_id'  ")or die(mysql_error());?>

	<script>
	window.location="job_strucure.php";
	</script>
	<?php
	}
		elseif (isset($_POST['submit_add_least']))
	{
	$jobino_Title = $_POST['jobino_Title'];
	$level_three_job_title = $_POST['level_three_job_title'];
	$ID=$_POST['ID'];

	
mysql_query("insert into grade_job_title (Level_Three_ID,Job_Titile,id) values('$level_three_job_title','$jobino_Title','ID' )")or die(mysql_error());?>
	
	  
		<script>
	window.location="job_strucure.php";
	</script>
	<?php
	}
?>