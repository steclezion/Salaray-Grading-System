<?php
include('dbcon.php');

$id=$_GET['id'];

mysql_query("delete from grade_job_title  where  Id='$id'") or die(mysql_error());

header('location:job_strucure.php');
?>