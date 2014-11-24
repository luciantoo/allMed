<!DOCTYPE html>
<html lang="en">
	<head>
		<title>AllMedical</title>
		

	<?php 
	session_start(); 
	if(!isset($_SESSION['email'])) {
		header("Location: /wad/login"); }
		
	define('DB_HOST', 'localhost'); 
	define('DB_NAME', 'wad'); 
	define('DB_USER','root'); 
	define('DB_PASSWORD',''); 
	$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
	$uid = $_SESSION['email'];
	$query = mysql_query("SELECT * FROM `user-info` where uid = '$uid'") or die(mysql_error());
	$row = mysql_fetch_array($query) or die("Failed " . mysql_error());
	$usertype = $row['usertype'];
	
	switch ($usertype) {
	case "admin":
		include 'admin_home.php';
		break;
	case "doctor":
		include 'doctor_home.php';
		break;
	case "pacient":
		include 'pacient_home.php';
		break;
	
	}
	
	
	?>
	</head>

	<body>
	</body>
</html>
