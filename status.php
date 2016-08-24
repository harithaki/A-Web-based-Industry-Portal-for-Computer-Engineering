<!DOCTYPE html>
<html>
<?php
	include_once 'dbconfig.php';

		
	session_start();
		if(!isset($_SESSION['user'])){
			header("Location: index.php");
		}
		

$option1 = $_GET['comp'];
	
$search = $_SESSION['user'];
		$sql="SELECT *FROM student_preference WHERE (preference1 LIKE '%$search%' OR 
preference2 LIKE '%$search%' OR preference3 LIKE '%$search%' OR preference4 LIKE '%$search%' OR 
preference5 LIKE '%$search%' OR preference6 LIKE '%$search%' OR preference7 LIKE '%$search%' OR preference8 LIKE '%$search%' OR preference9 LIKE '%$search%' OR preference10 LIKE '%$search%' )"; 									
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
	$regnum=  $row['RegNum'];
	$compname = $_SESSION['user'];
	$fullname = $row['Fullname'];
	//$status = $_GET['status'];
	 
	$regnum= mysql_real_escape_string($regnum);		
	$compname= mysql_real_escape_string($compname);	
	$fullname= mysql_real_escape_string($fullname);	
	//$status= mysql_real_escape_string($status);	
		
	
	$sql="INSERT INTO company_details(regnum,compname,fullname,status) VALUES('$regnum','$compname','$fullname','Sort out')";
		mysql_query($sql);
	}
		 
	
    header("Location:companyHome.php");

?>
</html>