<?php
	include_once 'dbconfig.php';
?>


<html>
	
<body bgcolor="#E6E6FA">
<head>
<style>
body{
				background-image: url(images/student.png);            
               	background-size: 100%;
              	background-origin: content;
            }

		.prefer {
				
			position:absolute;
			left:550px;
			top:150px;
			z-index:1;
			}
			
			.upload {
				
			position:absolute;
			left:700px;
			top:560px;
			z-index:1;
			}
			
			.regnum {
				
			position:absolute;
			left:100px;
			top:100px;
			z-index:1;
			}
			.status {
				
			position:absolute;
			left:200px;
			top:560px;
			z-index:1;
			}



button {
  color:#0ECF07;
  margin: 20px;
  background-color:#4B4E4B;
  font-weight: bold;
  font-size: 150%;
  text-align:center;  
}
table, th, td {
		border: 1px solid black;
		border-collapse: collapse;
		margin-top: 20px;
	}
	th, td {
		padding: 5px;
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
    <?php
       function preferens($compname){

     
		  
		$query = mysql_query("SELECT company_name FROM ADMIN_ADD_COMPANY"); // Run your query

		$out =" <select name=".$compname."> " ; // Open your drop down box

		// Loop through the query results, outputing the options one by one
		while ($row = mysql_fetch_array($query)) {
			//echo <option>---Select Company-</option>
		   $out .= '<option value="'.$row['company_name'].'">'.$row['company_name'].'</option>';
		}

		$out .= '</select>';
		echo "$out";

	}
    ?>

    </head>
    <body>
	
	<div class = "btn btn-1 btn-1a" ><?php echo "<br/><a href='logout.php'>Logout</a>"; ?> </div>
        <div class="regnum">
		<?php session_start();
		if(!isset($_SESSION['user'])){
			header("Location: index.php");
		}
		?>
		<table><tr><td> RegNum: </td><td><?php echo $_SESSION['user']; ?>  </td></tr></table></div>
		<div class="prefer">
		<form name="company" method="get" action="./choise.php"> 
		
					<b>Full Name:<b><input type="text" name="FullName">
				
				

            <header><h1>Preference of the Companies</h1></header>
            <h2> Select your preference of the companies </h2>
               
                <b>Preference 01:</b>  <?php preferens("company1") ?><br>
                <b>Preference 02:</b>  <?php preferens("company2") ?><br>
                <b>Preference 03:</b>  <?php preferens("company3") ?><br>
                <b>Preference 04:</b>  <?php preferens("company4") ?><br>
                <b>Preference 05:</b>  <?php preferens("company5") ?><br>
                <b>Preference 06:</b>  <?php preferens("company6") ?><br>
                <b>Preference 07:</b>  <?php preferens("company7") ?><br>
                <b>Preference 08:</b>  <?php preferens("company8") ?><br>
                <b>Preference 09:</b>  <?php preferens("company9") ?><br>
                <b>Preference 10:</b>  <?php preferens("company10") ?><br>
                <input style="align:centre" type="submit" value="submit">
            </form>
        </div>

   
            <div class="upload"> 
                <?php include_once 'dbconfig.php'; ?>
				<hr>
              <h1>Upload for CV</h1>
           
               

                <h2>Please Upload Your CV as PDF type</h2>
                <br/><br/>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                <input type="file" name="file"/>
                <button type="submit" name="btn-upload">Upload</button>
				</form>
				
            </div>
   
  

<div class = "status"><table border="1" style="width:100%">
			<hr>
			<tr>
		<h1>CURRENT STATUS</h1>
		<th> COMPANY NAME </th>
		<th> STATUS</th>
	</tr>
			
			<?php
	 
// What to look for
$search =$_SESSION['user'];


$sql="SELECT *FROM company_details WHERE (regnum LIKE '%$search%' )"; 									
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
	
		?>
        
        <td td align=center> <?php echo $row['compname'] ?> </td>
		<td td align=center> <?php echo $row['status'] ?> </td>
				 
		
		 
</tr>
       
        <?php
	}
	?>
	</table>
			
</body>
</html>