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
			
			#create {
			
				background-color: rgba(0, 0, 0, 0);
				width: 274px;
				height: 48px;
				background-image: url(img/create.png);
			
			}
			
			#logo {
				background-color: rgba(0, 0, 0, 0);
				width: 416px;
				height: 95px;
				background-image: url(img/AllMedical-logo.png);
			}
			
			#home {
			
				background-color: rgba(0, 0, 0, 0);
				width: 98px;
				height: 50px;
				background-image: url(img/home.png);
			
			}
			
			#alert {
			
				background-color: rgba(0, 0, 0, 0);
			
			}
			
		</style>

	<?php 
	session_start();
	
	define('DB_HOST', 'localhost'); 
	define('DB_NAME', 'wad'); 
	define('DB_USER','root'); 
	define('DB_PASSWORD',''); 
	$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
	
	$email = (isset($_POST['usermail']) ? $_POST['usermail'] : null);
	$firstname = (isset($_POST['firstname']) ? $_POST['firstname'] : null);
	$lastname = (isset($_POST['lastname']) ? $_POST['lastname'] : null);
	
	$uid = (isset($_GET['uid']) ? $_GET['uid'] : null);
	
	if ($uid !=null) {
		$query = mysql_query("SELECT * FROM `user-info` where uid = '$uid'") or die(mysql_error()); }
	else if ($email != null){
		$query = mysql_query("SELECT * FROM `user-info` where email = '$email'") or die(mysql_error()); }
	else {
		$query = mysql_query("SELECT * FROM `user-info` where firstname = '$firstname' and lastname = '$lastname'") or die(mysql_error()); }
	$row = mysql_fetch_array($query);
	if(mysql_num_rows($query) < 1 || $row['usertype'] != 'pacient') { header('Location: /wad/create.php?alert=2'); }
	else if (mysql_num_rows($query) > 1) { header('Location: /wad/create.php?alert=1'); }
	else { $uid = $row['uid'];}
	
	?>
	</head>

	<body>
		<br /><br /><br />
		<div id="center" align="center">
			<br><br><br><br>
			<div id="logo"></div><br>
			<a href = "/wad/"><div id="home"></div></a>
			<div id="create"></div>
			<br>
			<p>Input appointment information.</p>
			<form action="/wad/details.php?uid=<?php print $uid; ?>" method="post">
				<table>
					<tr>
						<td><label for="date">Date<font color="#990033">*</font></lable></td>
						<td><input type="date" name="date" required autofocus></td>
					</tr>
					<tr>
						<td><label for="time">Time<font color="#990033">*</font></label></td>
						<td><input type="time" name="time" required></td>
					</tr>
					<tr>
						<td><label for="notes">Notes</label></td>
						<td><input type="text" name="notes" maxlength="100"></td>
					</tr>
					<tr>
						<td><label for="pnotes">Pacient notes</label></td>
						<td><input type="text" name="pnotes" maxlength="100" ></td>
					</tr>
				</table>
				<br>
				<input type="submit" value="Submit">
			</form>
			<br><br><br><br>
		</div>
		<br><br><br><br>
	</body>
</html>
