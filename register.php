<?php
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'wad'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

$usertype = $_POST['usertype'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$city = $_POST['city'];
$address = $_POST['address'];
$usermail = $_POST['usermail'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$md5pass = md5($_POST['password']);
$md5mail = md5 ($_POST['usermail']);
$emailtest = TRUE;

$query = mysql_query("SELECT * FROM `user-info` where email = '$usermail'") or die(mysql_error());
if(mysql_num_rows($query) > 0) $emailtest = FALSE;

if($password != $confirm && $email-test == FALSE) {
    header('Location: /wad/register.html?email=bad&pass=bad'); }
else if($password != $confirm && $emailtest == TRUE) {
    header('Location: /wad/register.html?email=good&pass=bad'); }
else if($password == $confirm && $emailtest == FALSE) {
    header('Location: /wad/register.html?email=bad&pass=good'); }
	

$query = mysql_query("INSERT INTO `user-info` ( usertype, email, firstname, lastname, city, address )
        VALUES ( '$usertype', '$usermail', '$firstname', '$lastname', '$city', '$address' );") or die(mysql_error());
		
$query = mysql_query("INSERT INTO `user-login` ( email, password )
        VALUES ( '$md5mail', '$md5pass' );") or die(mysql_error());
		
mysql_close();

header('Location: /wad/login');

?>