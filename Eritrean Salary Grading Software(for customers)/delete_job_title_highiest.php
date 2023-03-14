<?php
include('dbcon.php');

$id=$_GET['id'];

mysql_query("delete from level_one_job where  Level_One_ID='$id'" ) or die(mysql_error());

header('location:job_strucure.php');
?>