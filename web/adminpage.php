<?php
			
			
			$CompanyName1 = $_GET['CompanyName'];
			$Address1=$_GET['Address'];
			$Email1=$_GET['Email'];
			$Phone1=$_GET['Phone'];
			$comments1=$_GET['comments'];
			
			

	$fp = fopen("company.txt", "a");
	$savestring1 = $CompanyName1 . "," . $Address1 . "," . $Email1 . "," . $Phone1 . "," . $comments1 . "\n";
	
	fwrite($fp, $savestring1);
	
	fclose($fp);
	
	$fs = fopen("co.txt", "a");
	$savestring2 = $CompanyName1 . "\n";
	
	fwrite($fs, $savestring2);
	
	fclose($fs);
?>