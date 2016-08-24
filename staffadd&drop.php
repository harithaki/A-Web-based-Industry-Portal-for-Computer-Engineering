<html>
	<head>
		<style>
			body{
			background-color: #D8D8D8;
			background-size: 100%;
			background-origin: content;
		}
		
		#header{
			background-color: #666699;
			font-style: italic;
			color: black;
			text-align:left;
			padding-bottom: 1px;
			padding-top: 1px;
			padding-left: 20px;
		}
		
		table, th, td {
			border: 1px solid black;
			margin-top: 40px;
		}
		
		#value{
			margin-left: 120px;
		}
		</style>
	</head>
	
	<body>
	
		<div id = "header">
			<h1> Selected Student List </h1>	
		</div>
		
		<table width = "300px">
		<?php
		$name = $_GET['name'];
		if(!empty ($_GET['name'])){
			foreach($_GET['name'] as $selected){
				echo "<tr><td>";
				echo $selected ."<br/>";
				echo "</tr></td>";
			}
		}
		?>
		</table>
		
		
	</body>
</html>