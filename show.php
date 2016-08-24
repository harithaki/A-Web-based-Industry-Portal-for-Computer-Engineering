<?php
include_once 'dbconfig.php';
if(isset($_GET['remove_id']))
{
    $res=mysql_query("SELECT file FROM tbl_uploads WHERE id=".$_GET['remove_id']);
    $row=mysql_fetch_array($res);
    mysql_query("DELETE FROM tbl_uploads WHERE id=".$_GET['remove_id']);
    unlink("content/".$row['file']);
    header("Location: show.php");
}
?>
<html>
<head>
<style type="text/css">

	
  .list {
				
	position:absolute;
	left:40px;
	top:100px;
	width:600px;
	height:140px;
	z-index:1;
	}
	
	table, th, td {
		border: 1px solid black;
		border-collapse: collapse;
		margin-left: 50px;
	}
	th, td {
		padding: 5px;
	}
		
</style>

<script type="text/javascript">
function remove(id)
{
    if(confirm(' Sure to remove file ? '))
    {
        window.location='delete_preference1.php?remove_id='+id;
    }
}
</script>
</head>

<body>
	<h1>Student Preference</h1>
		<div class="list">
		<table style = "width:1190px">
		<tr style = "background-color: #33FF66">
			<th style = "width:160px"> Student Name </th>
			<th> 1st Choise </th>  <th>2nd Choise </th> <th> 3rd Choise </th> <th> 4th Choise </th> <th> 5th Choise </th>
			<th> 6th Choise  </th> <th> 7th Choise  </th> <th> 8th Choise  </th> <th> 9th Choise  </th> <th> 10th Choise  </th><th> Delete  </th>
		</tr>


			<?php
			
	$sql="SELECT * FROM STUDENT_PREFERENCE";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
       <tr>
        <td><?php echo $row['RegNum']      ?></td>
        <td><?php echo $row['preference1'] ?></td>
        <td><?php echo $row['preference2'] ?></td>
        <td><?php echo $row['preference3'] ?></td>
        <td><?php echo $row['preference4'] ?></td>
        <td><?php echo $row['preference5'] ?></td>
        <td><?php echo $row['preference6'] ?></td>
        <td><?php echo $row['preference7'] ?></td>
        <td><?php echo $row['preference8'] ?></td>
        <td><?php echo $row['preference9'] ?></td>
        <td><?php echo $row['preference10'] ?></td>
		<td><a href="javascript:remove(<?php echo $row['stu_id'] ?>)">Delete</a></td>
        </tr>
        <?php


	}
	?>

	</table>	
	<h2> <a  href = "adminHome.php" style = "text-decoration:none">Back </h2></a>
</div>
</body>
</html>