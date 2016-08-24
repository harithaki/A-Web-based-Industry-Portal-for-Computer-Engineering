<?php
include_once 'dbconfig.php';
 
				
            $emp_id = $_GET['Companyname'];
 
if(isset($emp_id))
{
 
mysql_query("delete from admin_add_company where company_name='$emp_id'");

 
}
         
?>

		<script>
		alert('Successfully Deleted');
        window.location.href='delete.html';
        </script>