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
				background-color: #D2D2D2;
				alignment-adjust: central;
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
    			width: 700px;
    			border-radius: 1px;
  				box-shadow: 0px 0px 0px 8px rgba(0,0,0,0.3);
			}
			
			#upcoming {
			
				background-color: rgba(0, 0, 0, 0);
				width: 400px;
				height: 62px;
				background-image: url(img/upcoming.png);
			
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
			
			#previous {
			
				background-color: rgba(0, 0, 0, 0);
				width: 312px;
				height: 48px;
				background-image: url(img/previous.png);
			
			}
			
			#create {
			
				background-color: rgba(0, 0, 0, 0);
				width: 274px;
				height: 48px;
				background-image: url(img/create.png);
			
			}
			
			#approve {
				background-color: rgba(0, 0, 0, 0);
				width: 243px;
				height: 45px;
				background-image: url(img/approve.png);
			}
			
			
			#requests {
			
				background-color: rgba(0, 0, 0, 0);
				width: 300px;
				height: 36px;
				background-image: url(img/apprequests.png);
			
			}
			
table a:link {
	color: #666;
	font-weight: bold;
	text-decoration:none;
}
table a:visited {
	color: #999999;
	font-weight:bold;
	text-decoration:none;
}
table a:active,
table a:hover {
	color: #bd5a35;
	text-decoration:underline;
}
table {
	font-family:Arial, Helvetica, sans-serif;
	color:#666;
	font-size:12px;
	text-shadow: 1px 1px 0px #fff;
	background:#eaebec;
	margin:20px;
	border:#ccc 1px solid;

	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;

	-moz-box-shadow: 0 1px 2px #d1d1d1;
	-webkit-box-shadow: 0 1px 2px #d1d1d1;
	box-shadow: 0 1px 2px #d1d1d1;
}
table th {
	padding:21px 25px 22px 25px;
	border-top:1px solid #fafafa;
	border-bottom:1px solid #e0e0e0;

	background: #ededed;
	background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));
	background: -moz-linear-gradient(top,  #ededed,  #ebebeb);
}
table th:first-child{
	text-align: left;
	padding-left:20px;
}
table tr:first-child th:first-child{
	-moz-border-radius-topleft:3px;
	-webkit-border-top-left-radius:3px;
	border-top-left-radius:3px;
}
table tr:first-child th:last-child{
	-moz-border-radius-topright:3px;
	-webkit-border-top-right-radius:3px;
	border-top-right-radius:3px;
}
table tr{
	text-align: center;
	padding-left:20px;
}
table tr td:first-child{
	text-align: left;
	padding-left:20px;
	border-left: 0;
}
table tr td {
	padding:18px;
	border-top: 1px solid #ffffff;
	border-bottom:1px solid #e0e0e0;
	border-left: 1px solid #e0e0e0;
	
	background: #fafafa;
	background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
	background: -moz-linear-gradient(top,  #fbfbfb,  #fafafa);
}
table tr.even td{
	background: #f6f6f6;
	background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
	background: -moz-linear-gradient(top,  #f8f8f8,  #f6f6f6);
}
table tr:last-child td{
	border-bottom:0;
}
table tr:last-child td:first-child{
	-moz-border-radius-bottomleft:3px;
	-webkit-border-bottom-left-radius:3px;
	border-bottom-left-radius:3px;
}
table tr:last-child td:last-child{
	-moz-border-radius-bottomright:3px;
	-webkit-border-bottom-right-radius:3px;
	border-bottom-right-radius:3px;
}
table tr:hover td{
	background: #f2f2f2;
	background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
	background: -moz-linear-gradient(top,  #f2f2f2,  #f0f0f0);	
}
			
		</style>

	<?php 
	if(!isset($_SESSION['email'])) {
		header("Location: /wad/login"); }
	
	$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
	
	$uid = $_SESSION['email'];
	
	
	$doctor_query = mysql_query("SELECT * FROM `user-info` where uid = '$uid'") or die(mysql_error());
	$doctor_row = mysql_fetch_array($doctor_query) or die("Failed " . mysql_error());
	$name = $doctor_row["lastname"];
	
	$query = mysql_query("SELECT * FROM `appointments` where dr_uid = '$uid' AND date > SYSDATE() order by date") or die(mysql_error());
	
	$fullname = $doctor_row["firstname"] . " " . $doctor_row["lastname"];
	$requests_query = mysql_query("SELECT * FROM `requests` where doctor = '$fullname' order by date") or die(mysql_error());
	
	?>
	</head>

	<body>
	<br><br><br><br>
	
	<div id="center" align="center">
	<br><br><br><br>
	<div id="logo"></div><br>
	<p>Welcome Dr. <?php print $name ?>!</p><form action="/wad/logout"><input type="submit" value="Logout"></form>
	<br>
	
	<?php
	
	if(mysql_num_rows($requests_query) > 0) {
		print "<div id=\"requests\"></div><table cellspacing='0'><tr><th>Pacient</th><th>Preferred date</th><th>Preferred time</th><th>Reason</th><th>Profile</th><th>Delete</th></tr>";
		while($row = mysql_fetch_array($requests_query)){
			$pacient = $row['uid'];
			$query_temp = mysql_query("SELECT * FROM `user-info` where uid = '$pacient'") or die(mysql_error());
			$row_temp = mysql_fetch_array($query_temp);
			$time = date('G:i', strtotime($row['date']));
			$date = date('d M Y', strtotime($row['date']));
			$id = "/wad/profile.php?uid=" . $row_temp['uid'];
			print "<tr><td>".$row_temp['firstname']." ".$row_temp['lastname']."</td><td>".$date."</td><td>".$time."</td><td>".$row['reason']."</td><td><a href=\"".$id."\">Profile</a></td><td><a href=\"/wad/delete.php?table=requests&date=".$row['date']."\"><img src=\"img/delete.png\" /></a></td></tr>";
		}
		print "</table>";
		
	}
	
	?>
	<br>
	<div id="upcoming"></div>
	<table cellspacing='0'>
	<tr><th>Name</th><th>Date</th><th>Time</th><th>Notes</th><th></th><th>Delete</th></tr>
	<?php
	while($row = mysql_fetch_array($query)){
	$pacient = $row['p_uid'];
	$query_temp = mysql_query("SELECT * FROM `user-info` where uid = '$pacient'") or die(mysql_error());
	$row_temp = mysql_fetch_array($query_temp);
	$time = date('G:i', strtotime($row['date']));
	$date = date('d M Y', strtotime($row['date']));
	$id = "/wad/profile.php?uid=" . $row_temp['uid'];
    print "<tr><td>".$row_temp['firstname']." ".$row_temp['lastname']."</td><td>".$date."</td><td>".$time."</td><td>".$row['notes']."</td><td><a href=\"".$id."\">Profile</a></td><td><a href=\"/wad/delete.php?date=".$row['date']."\"><img src=\"img/delete.png\" /></a></td></tr>";
	}
	print "</table>";
	?>
	<a href = "/wad/create"><div id="create"></div></a>
	<a href = "/wad/previous"><div id="previous"></div></a>
	<a href = "/wad/approve"><div id="approve"></div></a>
	<a href = "/wad/edit"><div id="edit"></div></a>
	<br><br><br><br>
	</div>
	<br><br><br><br>
	</body>
</html>
