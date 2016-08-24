<?php
include_once 'dbconfig.php';
if(isset($_GET['remove_id']))
{
	$res=mysql_query("SELECT file FROM tbl_uploads WHERE id=".$_GET['remove_id']);
	$row=mysql_fetch_array($res);
	mysql_query("DELETE FROM tbl_uploads WHERE id=".$_GET['remove_id']);
	unlink("content/".$row['file']);
	header("Location:view.php");
}
?>