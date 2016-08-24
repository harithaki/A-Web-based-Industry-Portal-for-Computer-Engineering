<?php
include_once 'dbconfig.php';
?>
<html>
<head>
<style type="text/css">

 body {
	background-image: url(images/added_company.jpg);
	padding-left:10px;
	}
		
 .list {
				
	position:absolute;
	left:545px;
	top:200px;
	width:330px;
	height:140px;
	z-index:1;
	}
		
</style>
</head>


<body>
		<div class="list">
		
<?php
	$sql="SELECT * FROM admin_add_company";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['company_name'] ?></td>
        </tr><br>
        <?php


	}
	?>
</div>
<h2> <a  href = "adminHome.php" style = "text-decoration:none">Back </h2></a>
</body>
</html>