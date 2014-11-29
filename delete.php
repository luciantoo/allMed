<?php
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'wad'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
session_start();

$date = $_GET['date'];
$table = (isset($_GET['table']) ? $_GET['table'] : 'appointments');

$query = mysql_query("DELETE FROM `$table` WHERE date = '$date'") or die(mysql_error());

echo "<script>
alert('Deleted.');
window.location.href='/wad/';
</script>";

?>