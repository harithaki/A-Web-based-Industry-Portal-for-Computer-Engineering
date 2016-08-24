<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login Page </title>
	<style type="text/css">

body {
	background-image: url(images/page1.PNG);;
		color: #5a5656;
		font-family: 'Open Sans', Arial, Helvetica, sans-serif;
		font-size: 16px;
		line-height: 1.5em;
}
#login {
	position:absolute;
	left:525px;
	top:219px;
	width:330px;
	height:140px;
	z-index:1;
}
form fieldset input[type="text"], input[type="password"] {
				
				background-color: #FFF;
				border: none;
				border-radius: 3px;
				color: #5a5656;
				font-family:  Arial, Helvetica, sans-serif;
				font-size: 20px;
				height: 50px;
				border: 1px solid #c7d0d2;
				outline: none;
				padding: 10px 10px;
				width: 300px;
				text
				-webkit-appearance:none;
		}
		form fieldset input[type="submit"] {
				background-color: #008dde;
				border: none;
				border-radius: 3px;
				color: #f4f4f4;
				cursor: pointer;
				font-family:  Arial, Helvetica, sans-serif;
				font-size: 20px;
				height: 50px;
				width: 300px;
				-webkit-appearance:none;
		}
		form fieldset a {
				color: #5a5656;
				font-size: 15px;
				
		}
		form fieldset a:hover { text-decoration:underline; color: #555; }


</style>
</head>

<body>
		<div class="left">
		<div id="login">
		<h1><b>Please login.</b> </h1>
		<form action = "login.php" method = "GET">
		<fieldset>
			<p><input type="text" required value="Username" name = "username" ></p>
			<p><input type="password" required value="Password" name = "userpass" ></p>
			<p><a href="#">Forgot Password?</a></p>
			<p><input type="submit" value="Login"></p>
		</fieldset>
		<p><?php if(isset($_GET['id']) && $_GET['id']=="nv") echo "username or password is invalid"?></p>
		</form>
		</div> 
		</div>
</body>
</html>