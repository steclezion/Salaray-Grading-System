<?php
include('dbcon.php');

$id=$_GET['id'];

mysql_query("delete from grade_job_title  where  id='$id'") or die(mysql_error());

header('location:assign_grade.php');
?>