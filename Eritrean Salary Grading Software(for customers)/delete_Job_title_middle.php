<?php
include('dbcon.php');

$id=$_GET['id'];

mysql_query("delete from level_two_job  where  Level_Two_ID='$id'") or die(mysql_error());

header('location:job_strucure.php');
?>