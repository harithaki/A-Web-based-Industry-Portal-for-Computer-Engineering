<?php
	include_once 'dbconfig.php';
?>

<html>

	
	<head>
	<title> Company page </title>
	<style>
	 body {
	background-image: url(images/comp2.png);
	padding-left:10px;
	}
	
	
			
			.btn {
				border: none;
				font-family: inherit;
				font-size: inherit;
				color: inherit;
				background: none;
				cursor: pointer;
				padding: 10px 50px 25px 50px;
				display: inline-block;
				margin: 15px 30px;
				text-transform: uppercase;
				letter-spacing: 1px;
				font-weight: 700;
				outline: none;
				position: relative;
				float: right;
				-webkit-transition: all 0.3s;
				-moz-transition: all 0.3s;
				transition: all 0.3s;
			}

			.btn:after {
				content: '';
				position: absolute;
				z-index: -1;
				-webkit-transition: all 0.3s;
				-moz-transition: all 0.3s;
				transition: all 0.3s;
			}

			.btn-1 {
				border: 3px solid #fff;
				color: #fff;
			}

			.btn-1a:hover,
			.btn-1a:active {
				color: #0e83cd;
				background: black;
			}
			
			</style>
	<H1> <I> <B>  <center> Welcome to  <?php echo $_GET['id']?> </center>  </B> </I> </H1>
	
	<script>
	function togglecheckboxes(master,group){
		var cbarray = document.getElementsByClassName(group);
		for(var i = 0; i < cbarray.length; i++){
			var cb = document.getElementById(cbarray[i].id);
			cb.checked = master.checked;
		}
	}
	</script>
	</head>
	
	<body>
	
	<?php session_start();
		if(!isset($_SESSION['user'])){
			header("Location: index.php");
		}
		?>
		<div class = "btn btn-1 btn-1a" ><?php echo "<br/><a href='logout.php'>Logout</a>"; ?> </div>
	<table border="1" style="width:100%">
	

	<tr>
		<th> STUDENT NAME </th>
		<th> CV OF THE STUDENT </th>
		<th> STATE OF THE STUDENT</th>
	</tr>
	
	<form action="download.php" method="post">
	

	<?php
	
// What to look for
$search = $_GET['id'];


$sql="SELECT *FROM student_preference WHERE (preference1 LIKE '%$search%' OR 
preference2 LIKE '%$search%' OR preference3 LIKE '%$search%' OR preference4 LIKE '%$search%' OR 
preference5 LIKE '%$search%' OR preference6 LIKE '%$search%' OR preference7 LIKE '%$search%' OR preference8 LIKE '%$search%' OR preference9 LIKE '%$search%' OR preference10 LIKE '%$search%' )"; 									
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
	
		?>
        <tr>
        <td td align=center> <?php echo $row['Fullname'] ?> </td>
        <td align=center> <input type="checkbox" id="cb1_<?php echo $row['stu_id']; ?>"  class="cbgroup1" name="items[]" value="<?php echo $row['RegNum'] ?>.pdf">
		<a href="content/<?php echo $row['RegNum'] ?>.pdf">CV</a></td>
        <td td align=center> 
		<select name='status'>
		  <option value="1">Select only</option>
		  <option value="2">Send CV</option>
		  <option value="3">Sort out</option>
		  <option value="4">Call for interview</option>
		  <option value="5">Select as a trainee</option>
		</select> </td>
       </tr>
       
        <?php
	}
	?>

 </table>
<table><tr></tr><tr></tr><tr></tr><tr></tr>
<tr><td> <input type="checkbox" id="cbgroup1_master" onchange="togglecheckboxes(this,'cbgroup1')"> Select All</td>
	

	<td align=center> <input type="submit" name="formSubmit" value="Download as Zip" ></td>
</form>

	<td align=center> <input type="submit" value="Submit"></td>
</tr>
</table>
<h2><br> <a  href = "index.php" style = "text-decoration:none"> Back </br></h2></a>
</body>


</html>