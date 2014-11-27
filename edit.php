<!DOCTYPE html>
<html lang="en">
	<head>
		<title>AllMedical</title>
		<style title="MainDiv">
			body {
				background-image: url(img/background.jpg);
				
			    font-family: Helvetica;
			    font-weight: bold;
			    font-size: 12px;
			    color: #424242;
			}
			
			div {
				background-color: #BFBFBF;
				alignment-adjust: central;
				background-image: url(img/background-div.png);
			}
			
			img {
				border: 20px solid rgba(255, 0, 0, 0);
				background-clip: padding-box;
			}
			
			a:link {
    			color: #373737;
    			text-decoration: none;
    		}

			a:visited {
   				color: #373737;
			}

			a:hover {
    			color: #5B5B5B;
			}

			a:active {
    			color: #373737;
			}

			#center {
				margin-left: auto;
    			margin-right: auto;
    			width: 500px;
    			border-radius: 1px;
  				box-shadow: 0px 0px 0px 8px rgba(0,0,0,0.3);
			}
			
			#confirm {
				color: #990033;
			}
			
			#pass {
				color: #990033;
			}
			
			#home {
			
				background-color: rgba(0, 0, 0, 0);
				width: 98px;
				height: 50px;
				background-image: url(img/home.png);
			
			}
			
			#edit {
			
				background-color: rgba(0, 0, 0, 0);
				width: 136px;
				height: 36px;
				background-image: url(img/edit.png);
			
			}
			
			#logo {
				background-color: rgba(0, 0, 0, 0);
				width: 416px;
				height: 95px;
				background-image: url(img/AllMedical-logo.png);
			}
			
		</style>

	<?php
	
	define('DB_HOST', 'localhost'); 
	define('DB_NAME', 'wad'); 
	define('DB_USER','root'); 
	define('DB_PASSWORD',''); 
	$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
	session_start();

	$uid = $_SESSION['email'];
	$query = mysql_query("SELECT * FROM `user-info` where uid = '$uid'") or die(mysql_error());
	$row = mysql_fetch_array($query) or die("Failed " . mysql_error());
	
	?>
	</head>

	<body>
		<br /><br /><br />
		<div id="center" align="center">
			<br><br><br><br>
			<div id="logo"></div><br>
			<a href="/wad/"><div id="home"></div></a>
			<div id="edit"></div><br>
			<div id="pass"><?php if(isset($_GET['pass'])) print "Wrong old password."  ?></div>	
			<div id="confirm"><?php if(isset($_GET['confirm'])) print "Psswords do not match." ?></div>
			<form action="edited.php" method="post">
				<table>
					<tr>
						<td>Name</td>
						<td><?php print $row['firstname'] . " " . $row['lastname'] ?></td>
					</tr>
					<tr>
						<td><label for="email">E-Mail</label></td>
						<td><input type="email" name="email" autofocus></td>
					</tr>
					<tr>
						<td><label for="address">Address</lable></td>
						<td><input type="text" name="address"></td>
					</tr>
					<tr>
						<td><label for="city">City</label></td>
						<td><input type="text" name="city" ></td>
					</tr>
					<tr>
						<td><label for="phone">Phone</label></td>
						<td><input type="text" name="phone"></td>
					</tr>
					<tr>
						<td><label for="password">New Password</label></td>
						<td><input type="password" name="password" ></td>
					</tr>
					<tr>
						<td><label for="confirm">Confirm Password</label></td>
						<td><input type="password" name="confirm" ></td>
					</tr>
					<tr>
						<td><label for="old">Old Password<font color="#990033">*</font></label></td>
						<td><input type="password" name="old" required></td>
					</tr>
				</table>
				<br>
				<p>(<font color="#990033">*</font> - required)</p>
				<input type="submit" value="Update">
			</form>
		<br><br><br><br>
		</div>
		<br><br><br>
	
	
	<script>
	window.onload = function processUser()
	{
		var parameters = location.search.substring(1).split("&");

		var temp = parameters[0].split("=");
		e = unescape(temp[1]);
		temp = parameters[1].split("=");
		p = unescape(temp[1]);
		if (e == 'bad') document.getElementById("email").innerHTML = "Email already in use!";
		if( p == 'bad') document.getElementById("pass").innerHTML = "Passwords did not match!";
	};
	</script>
	</body>
</html>
