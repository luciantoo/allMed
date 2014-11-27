<?php
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'wad'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
session_start();

$uid = $_SESSION['email'];

$old = $_POST['old'];
$oldmd5 = md5($old);

$query = mysql_query("SELECT * FROM `user-login` where uid = '$uid'") or die(mysql_error());
$row = mysql_fetch_array($query) or die("Failed " . mysql_error());
if($row['password'] != $oldmd5) { header("Location: /wad/edit.php?pass=0"); exit;}

$password = $_POST['password'];
$confirm = $_POST['confirm'];
if ($password != $confirm) { header("Location: /wad/edit.php?confirm=0"); exit; }
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$phone = $_POST['phone'];


$passwordmd5 = md5($password);
$emailmd5 = md5($email);

if(isset($address)) {
$query = mysql_query("UPDATE `user-info` SET address = '$address' WHERE uid = '$uid';") or die(mysql_error()); }
if(isset($city)) {
$query = mysql_query("UPDATE `user-info` SET city = '$city' WHERE uid = '$uid';") or die(mysql_error()); }
if(isset($phone)) {
$query = mysql_query("UPDATE `user-info` SET phone = '$phone' WHERE uid = '$uid';") or die(mysql_error()); }
if(isset($email)) {
$query = mysql_query("UPDATE `user-info` SET email = '$email' WHERE uid = '$uid';") or die(mysql_error()); }
if(isset($passwordmd5)) {
$query = mysql_query("UPDATE `user-login` SET password = '$passwordmd5' WHERE uid = '$uid';") or die(mysql_error()); }
if(isset($emailmd5)) {
$query = mysql_query("UPDATE `user-login` SET email = '$emailmd5' WHERE uid = '$uid';") or die(mysql_error()); }


echo "<script>
alert('Information updated.');
window.location.href='/wad/';
</script>";

?>