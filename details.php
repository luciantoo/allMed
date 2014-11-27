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
$date = $_POST['date'];
$time = $_POST['time'];
$notes = $_POST['notes'];
$pnotes = $_POST['pnotes'];

$datetime = $date . " " . $time;


$query = mysql_query("INSERT INTO `appointments` ( dr_uid, p_uid, date, notes, p_notes )
        VALUES ( '$dr_uid', '$p_uid', '$datetime', '$notes', '$pnotes' );") or die(mysql_error());

echo "<script>
alert('Appointment created.');
window.location.href='/wad/';
</script>";

?>