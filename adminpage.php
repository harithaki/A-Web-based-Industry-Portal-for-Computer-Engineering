<?php
	include_once 'dbconfig.php';		
			
					
  $CompanyName1 = $_GET['CompanyName'];
  $Address1=$_GET['Address'];
  $Email1=$_GET['Email'];
  $Phone1=$_GET['Phone'];
  $comments1=$_GET['comments'];
			
  $CompanyName1= mysql_real_escape_string($CompanyName1);
  $Address1 = mysql_real_escape_string($Address1);
  $Email1 = mysql_real_escape_string($Email1);
  $comments1= mysql_real_escape_string($comments1);

  $sql="INSERT INTO ADMIN_ADD_COMPANY(company_name, Address, Email,PhoneNo,Message) VALUES('$CompanyName1','$Address1', '$Email1', '$Phone1','$comments1')";
		mysql_query($sql);
		
	
?>

		<script>
		alert('Successfully Submited');
        window.location.href='adminpage.html';
        </script>