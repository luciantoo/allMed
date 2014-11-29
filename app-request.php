<?php
session_start();
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'wad'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

$reason = $_POST['reason'];
$doctor = $_POST['doctor'];
$date = $_POST['date'];
$time = $_POST['time'];
$datetime = $date . " " . $time;
$uid = $_SESSION['email'];


$query = mysql_query("INSERT INTO `requests` ( uid, reason, date, doctor )
        VALUES ( '$uid', '$reason', '$datetime', '$doctor' );") or die(mysql_error());
		
mysql_close();

echo "<script>
alert('Request sent.');
window.location.href='/wad/';
</script>";

?>