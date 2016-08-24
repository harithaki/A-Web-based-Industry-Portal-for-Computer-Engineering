<html>
<body bgcolor="#E6E6FA">
<head>
<style>
	
	
</style>
    <?php
        function preferens($compname){

            ////////////////////////////////////////////

            $out =" <select name=".$compname."> " ;

            if ($file = @fopen('co.txt', 'r')) {
              while(($line = fgets($file)) !== false) {
                    $out .= "<option>".$line."</option>";
             }
                fclose($file);
            }
            $out .= "</select>" ;

         echo "$out";
            ///////////////////////////////////////////
        }
		
		function table($compname){
            $out =" <".$compname."> " ;
            if ($file = @fopen('co.txt', 'r')) {
				while(($line = fgets($file)) !== false) {
					$out .= "<td>".$line."</td>";
				}
                fclose($file);
            }
			echo "$out";
        }
		
		
    ?>
	
    </head>
	
    <body>

    <div id = "container">
        <div id = "nav">
            <header><h1>Preference of the Companies</h1></header>
            <h2> Select your preference of the companies </h2>
            <form name = "company" method = "get" action = "./choise.php">    
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

        <div id = "section">
            <div id = "hed"> 
                <?php include_once 'dbconfig.php'; ?>
                <header><h1> Upload for CV </h1></header>
            </div>
			
            <div>
                <h2> Please Upload Your CV as PDF type </h2>
				
                <form action = "upload.php" method = "post" enctype = "multipart/form-data">
                <input type = "file" name = "file"/>
                <button type = "submit" name = "btn-upload"> Upload </button>
                </form>
				<br><br>
				
				<table id = "t1" style = "width:560px">
					<th colspan = "2" style = "background-color: #9999FF"> Uploaded CVs </th>
					<tr align = "center" style = "background-color: #9999FF"> <td><strong> File Name </strong></td> <td><strong> View </strong></a></td> </tr>	
				
				
				<?php
					$dir = "C:/xampp/htdocs/project1/uploads/";
					
					// Open a directory, and read its contents
					if (is_dir($dir)) {
						if ($dh = opendir($dir)) {
							while (($file = readdir($dh)) !== false){
								if($file != "." and $file != ".."){
									echo "<tr align = 'center'><td>" .$file. "</td>									
									<td><a href = '$file'> View </a></td></tr>";
								}
							}
							closedir($dh);
						}
					}
				?>
				
				
				</table>
            </div>
		</div>
		
		<div id = "section1">
			<header><h1> Current Status </h1></header>
			
			<table style = "width:100%">
				<tr style = "background-color: #33FF66" align = "center">
					<th = "1" width = 10px> Company Name </th>
					<?php table("company1")?>
				</tr>
				<tr>
					<th rowspan = "13" width = 20px style = "background-color: #33FF66"> Status </th>
					<td>
					<?php
						$file = "virtusa.txt";
						$f = fopen($file, "r");
						while ( $line = fgets($f, 1000) ) {
							print $line;
						}
					?>
					
					</td>
				</tr>
				
			</table>
			
		</div>
		
	</div>  

</body>

</html>