<?php
/*
$Companyname='submit';
if(isset($_GET['Delete'])){
	$file=fopen("co.txt","a");
	$Companyname='';
	
}
*/


$oldMessage = $_GET['Companyname'];

//$oldMessage = "";

//$oldMessage = $Delete1;
$deletedFormat = "";

//read the entire string
$str=file_get_contents('co.txt');

//replace something in the file string - this is a VERY simple example
$str=str_replace("$oldMessage", "$deletedFormat",$str);

//write the entire string
file_put_contents('co.txt', $str);




?>