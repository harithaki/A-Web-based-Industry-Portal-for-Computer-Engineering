<html>
	<body>
			<?php
				if (empty($_GET['username']) && empty($_GET['userpass'])){
					echo "Username or Password is invalid";		
				}
				else if(isset($_GET['username']) && !isset($_GET['userpass'])){
					echo "<p>".$_GET['userpass']." seems you have forgotton the password. Try Forgot your password option or try again</p>";
					
				}
				else{
				
					$file = fopen("loginData.txt","r");

					while(! feof($file))
					{
					  $loginData = explode(" ",fgets($file));
					  echo $loginData[0];
					  if($_GET['username']==$loginData[0] && ($_GET['userpass'])==$loginData[2]){
						if($loginData[3]=="std"){
						fclose($file);
						header("Location: studentHome.php?id=".$_GET['username']);
						exit;
						}
						else if($loginData[3]=="stf"){
						fclose($file);
						header("Location: staffHome.php?id=".$_GET['username']);
						exit;
						}
						else if($loginData[3]=="admin"){
						fclose($file);
						header("Location: adminHome.php?id=".$_GET['username']);
						exit;
						}
						else if($loginData[3]=="comp"){
						fclose($file);
						header("Location: companyHome.php?id=".$_GET['username']);
						exit;
						}
					  }
					}
					fclose($file);
					header("Location: index.php?id=nv");
				}
			?>
</body>
</html>