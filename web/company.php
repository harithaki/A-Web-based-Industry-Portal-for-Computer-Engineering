<html>
	<head>
	<title> Company page </title>
	<H1> <I> <B> <U> <center> COMPANY PAGE - VIRTUSA </center> </U> </B> </I> </H1>
	</head>
	
	<body>
	<table border="1" style="width:100%">
	 
	<tr>
		<th> STUDENT NAME </th>
		<th> CV OF THE STUDENT </th>
		<th> STATE OF THE STUDENT</th>
	</tr>
	
	<?php
	
	for ($x = 0; $x <= 10; $x++){
	echo"<tr>" ;
		echo "<td align=center> <input type=\"text\" name=\"Name\"></td>";
		echo"<td align=center> <input type=\"submit\" value=\"CV\"></td>";
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
	
?>
</table>

<BR> <BR>
<table>
<tr>
	<td align=center> <input type="submit" value="Download all CV as a zip file"></td>
</tr>
<tr>
</tr>

<tr>
	<td align=center> <input type="submit" value="Submit"></td>
</tr>
</table>
	
	
	</body>
</html>

