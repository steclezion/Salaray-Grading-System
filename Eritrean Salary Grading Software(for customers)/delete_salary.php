<?php
include('dbcon.php');

$id=$_GET['id'];

mysql_query("delete from salary  where  id='$id'") or die(mysql_error());

header('location:Set_Salary_Value.php');
?>