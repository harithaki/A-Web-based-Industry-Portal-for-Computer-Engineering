<html>
<head>

		<title> admin page </title>
		<style>
			body{
				background-image: url(images/img_admin.jpg);            
               	background-size: 100%;
              	background-origin: content;
            }

			.left {
				
			position:absolute;
			left:30px;
			top:60px;
			
			z-index:1;
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


</head>

	<body>
	<?php session_start();
		if(!isset($_SESSION['user'])){
			header("Location: index.php");
		}
		?>
		<div class = "btn btn-1 btn-1a" ><?php echo "<br/><a href='logout.php'>Logout</a>"; ?> </div>
		<div class="left">
		<h2><br> <a  href = "adminpage.html"  style = "text-decoration:none"> Add companies </br></h2></a>
		<h2><br> <a  href = "companylist.php" style = "text-decoration:none"> Existing companies </br></h2></a>
		<h2><br> <a  href = "delete.html" style = "text-decoration:none"> Delete company </br></h2></a>
		<h2><br> <a  href = "show.php" style = "text-decoration:none"> Selected companies </br></h2></a>
		<h2><br> <a  href = "view.php" style = "text-decoration:none"> Manage uploaded CVs </br></h2></a>
		</div>
		
	</body>
</html>
