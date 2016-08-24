<?php
			
			
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
			
		
	$file = fopen("loginData.txt","r");
	$loginData = explode(" ",fgets($file));
	
	
	$fc = fopen("Choise.txt", "a");
	
	$savestring1= $loginData[0]. " " .$loginData[1]. " " .$preference1 . " " .$preference2. " " . $preference3. " " . $preference4 . " " . $preference5 ." ". $preference6 . " ".
	$preference7 . " ".$preference8 ." ". $preference9." ". $preference10."\n";
	
	
	fwrite($fc, $savestring1);
	
	fclose($fc);
	
	
	echo"<h1>You data has been saved in a text file according to the your choises.<h1>"
?>