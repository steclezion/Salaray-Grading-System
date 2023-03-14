<?php
include('dbcon.php');

$id=$_GET['id'];

mysql_query("update grade_job_title set Grade=0   where  id='$id'") or die(mysql_error());

header('location:assign_grade.php');
?>