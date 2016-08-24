<?php
	include_once 'dbconfig.php';
?>


<html>
	
<body bgcolor="#E6E6FA">
<head>
<style>
header {
    background-color:black;
    color:white;
    text-align:center;
    padding:1px; 
    line-height:30px;    
}
#nav {
    line-height:30px;
    background-color:#B6DAB2;
    width:400px;
    height: 690px;
    float:left;
    padding:6px;          
}
#section {
    background-color:#99C8BA;
    width:900px;
    height: 685px;
    float:left;
    padding:5px;
    text-align:center;        
}
input {
  color:#900 ;
  font-weight: bold;
  font-size: 140%;
  text-align:center; 
  margin: 10px; 
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

    <div id="container">
        <div id="nav"><?php session_start();
		if(!isset($_SESSION['user'])){
			header("Location: index.php");
		}
		?>
		<form name="company" method="get" action="./choise.php"> 
		<table>	<tr>	
					<td align=center><b>Full Name:<b></td>
					<td>
						<input type="text" name="FullName">
					</td>
				</tr></table>

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

        <div id="section">
            <div id="hed"> 
                <?php include_once 'dbconfig.php'; ?>
                <header><h1>Upload for CV</h1></header>
            </div>
            <div>
                <br/><br/>

                <h2>Please Upload Your CV as PDF type</h2>
                <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                <input type="file" name="file"/>
                <button type="submit" name="btn-upload">Upload</button>
                </form>
            </div>
    </div> 
  

<div id = "section1">
			<header><h1> Current Status </h1></header>
			<table><tr><td> RegNum: </td><td><?php echo $_SESSION['user']; ?>  </td></tr></table>
			<table style = "width:1190px">
			<tr style = "background-color: #33FF66">
			<th style = "width:160px"> Company Name </th>
			<?php
			$sql="SELECT * FROM admin_add_company";
			$result_set=mysql_query($sql);
			while($row=mysql_fetch_array($result_set))
			{
				?>
				
			<td> <?php echo $row['company_name'] ?> </td>
				
				<?php


			}
			?>
			</tr>
			<tr style = "background-color: #33FF66">
			<th style = "width:160px"> Current Status </th>


			</table>
				 
		</div>
		 </div>  

</body>
</html>