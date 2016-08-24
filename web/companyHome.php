<html>

	
	<head>
	<title> Company page </title>
	<H1> <I> <B> <U> <center> COMPANY PAGE - <?php echo $_GET['id']?> </center> </U> </B> </I> </H1>
		
	</head>
	
	<body>
	<form action="download.php" method="post">
	
	<table border="1" style="width:100%">
	

	<tr>
		<th> STUDENT NAME </th>
		<th> CV OF THE STUDENT </th>
		<th> STATE OF THE STUDENT</th>
	</tr>
	<?php
	$tokens = null;
// What to look for
$search = $_GET['id'];
// Read from file
$lines = file('Choise.txt');
foreach($lines as $line)
{
	
  // Check if the line contains the string we're looking for, and print if it does
  if(strpos($line, $search) !== false){
	$tokens = explode(" ", $line);
	echo"<tr>" ;
	echo "<td align=center> $tokens[1] </td>";
		
	?>
	
	
	
	<a href="uploads/<?php echo $tokens[0]; ?>.pdf">CV</a></td>
	<?php
	
	$file = 'uploads/"<?php echo $tokens[0]; ?>".pdf';
	$newfile = 'C:/wamp/www/example php/example php/web based project/cv';
 
if (!copy($file, $newfile)) {
    echo "failed to copy $file...\n";
}else{
    echo "copied $file into $newfile\n";
}

	//echo $tokens[0];
	echo"<td align=center>" ;
			echo "<select>";
					echo"<option value=\"1\">Select only</option>";
					echo"<option value=\"2\">Send CV</option>";
  					echo"<option value=\"3\">Sort out</option>";
  					echo"<option value=\"4\">Call for interview</option>";
					echo"<option value=\"5\">Select as a trainee</option>";
			echo"</select> ";
		echo"</td>";
	echo"</tr>";
	
	}
	}
	?>
	
</table>

</body>


</html>