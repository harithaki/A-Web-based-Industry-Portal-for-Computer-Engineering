<?php
include_once 'dbconfig.php';
if(isset($_GET['remove_id']))
{
    $res=mysql_query("SELECT file FROM tbl_uploads WHERE id=".$_GET['remove_id']);
    $row=mysql_fetch_array($res);
    mysql_query("DELETE FROM tbl_uploads WHERE id=".$_GET['remove_id']);
    unlink("uploads/".$row['file']);
    header("Location: view.php");
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>uploaded</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript">
function remove(id)
{
    if(confirm(' Sure to remove file ? '))
    {
        window.location='delete cv.php?remove_id='+id;
    }
}
</script>
</head>
<body>
<div id="header">
<label>Uploaded CV</label>
</div>
<div id="body">
	<table width="80%" border="1">
    <tr>
    <th colspan="4">All uploading CV</th>
    </tr>
    <tr>
    <td>Student RegNum</td>
    <td>File Type</td>
    <td>Delete</td>
    <td>View</td>
    </tr>
    <?php
	$sql="SELECT * FROM tbl_uploads";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><a href="javascript:remove(<?php echo $row['id'] ?>)">Delete</a></td>
        <td><a href="content/<?php echo $row['file'] ?>" target="_blank">view</a></td>
        </tr>
        <?php
	}
	?>
    </table>
    <h2> <a  href = "adminHome.php" style = "text-decoration:none">Back </h2></a>
   
</div>
</body>
</html>