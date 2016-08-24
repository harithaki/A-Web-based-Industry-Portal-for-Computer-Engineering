<?php
include_once 'dbconfig.php';
if(isset($_GET['remove_id']))
{
	$res=mysql_query("SELECT file FROM student_preference WHERE stu_id=".$_GET['remove_id']);
	$row=mysql_fetch_array($res);
	mysql_query("DELETE FROM student_preference WHERE stu_id=".$_GET['remove_id']);
	unlink("content/".$row['file']);
	header("Location:view.php");
}
?>