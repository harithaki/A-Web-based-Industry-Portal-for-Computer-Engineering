<!DOCTYPE html>
<html>
<?php
	include_once 'dbconfig.php';
	?>
	<head>
	
	</head>	
</body>
		 



		<?php	
	session_start();
		if(!isset($_SESSION['user'])){
			header("Location: index.php");
		}
		
	$regnum=$_SESSION['user'];
	$fullname=$_GET['FullName'];
	$preference1 = $_GET['company1'];
	$preference2 = $_GET['company2'];
	$preference3 = $_GET['company3'];
	$preference4 = $_GET['company4'];
	$preference5= $_GET['company5'];
	$preference6 = $_GET['company6'];
	$preference7= $_GET['company7'];
	$preference8 = $_GET['company8'];
	$preference9 = $_GET['company9'];
	$preference10 = $_GET['company10']; 
	
	$regnum= mysql_real_escape_string($regnum);		
	$preference1= mysql_real_escape_string($preference1);
	$preference2= mysql_real_escape_string($preference2);
	$preference3= mysql_real_escape_string($preference3);
	$preference4= mysql_real_escape_string($preference4);
	$preference5= mysql_real_escape_string($preference5);
	$preference6= mysql_real_escape_string($preference6);
	$preference7= mysql_real_escape_string($preference7);	
	$preference8= mysql_real_escape_string($preference8);	
	$preference9= mysql_real_escape_string($preference9);	
	$preference10= mysql_real_escape_string($preference10);
    $fullname= mysql_real_escape_string($fullname);
	
	$sql="INSERT INTO STUDENT_PREFERENCE(RegNum,Fullname,preference1,preference2,preference3,preference4,preference5,preference6,preference7,preference8,preference9,preference10) 
	VALUES('$regnum','$fullname', '$preference1','$preference2','$preference3','$preference4' , '$preference5','$preference6','$preference7','$preference8','$preference9','$preference10')";
		mysql_query($sql);
    header("Location:studentHome.php");

?>
</html>