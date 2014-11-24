<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'wad'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

function SignIn() { 
	session_start(); 
	{ 
		$mail=md5($_POST['usermail']);
		$mail_clear = $_POST['usermail'];
		$pass=md5($_POST['password']);
		$query = mysql_query("SELECT * FROM `user-login` where email = '$mail' AND password = '$pass'") or die(mysql_error());
		if(mysql_num_rows($query) > 0) 
		{
			$query_active = mysql_query("SELECT * FROM `user-info` where email = '$mail_clear'") or die(mysql_error());
			$row_active = mysql_fetch_array($query_active) or die("Failed " . mysql_error());
			
			if($row_active['active'] == 0) {
				header("Location: /wad/notactive.php");
			}
			else {
				$row = mysql_fetch_array($query) or die("Failed " . mysql_error());
				$_SESSION['email'] = $row['uid']; 
				session_write_close();
				header("Location: /wad"); 
			}
		}
		else 
		{ 
			header("Location: /wad/login-failed"); 
		}
			
	} 
} 
if(isset($_POST['submit'])) { SignIn(); } 

?>

