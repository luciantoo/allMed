<?php
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'wad'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
session_start();

$dr_uid = $_SESSION['email'];
$p_uid = $_GET['uid'];

$query = mysql_query("UPDATE `user-info` SET `active` = '1' WHERE uid = '$p_uid';") or die(mysql_error());
$query = mysql_query("SELECT * FROM `user-info` where uid = '$dr_uid'") or die(mysql_error());
$row = mysql_fetch_array($query) or die("Failed " . mysql_error());
$doctor = $row['firstname'] . " " . $row['lastname'];
$query = mysql_query("UPDATE `user-info` SET `doctor` = '$doctor' WHERE uid = '$p_uid';") or die(mysql_error());

echo "<script>
alert('User approved.');
window.location.href='/wad/approve';
</script>";

?>