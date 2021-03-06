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

	</head>

	<body>
		<br /><br /><br />
		<div id="center" align="center">
			<br><br><br><br>
			<div id="logo"></div><br>
			<a href = "/wad/"><div id="home"></div></a>
			<div id="create"></div>
			<br>
			<p> Input patient information. </p>
			<div id="alert"><?php 
			$alert = (isset($_GET['alert']) ? $_GET['alert'] : 0);
			if ($alert == 1){
			print "<font color=\"#990033\">Several patients with same name, please input email.</font>"; } 
			else if ($alert == 2) {
			print "<font color=\"#990033\">No such patient exists.</font>"; } 
			?>
			</div><br>
			<form action="/wad/details" method="post">
				<table>
					<tr>
						<td><label for="firstname">First Name<font color="#990033">*</font></lable></td>
						<td><input type="text" name="firstname" required autofocus></td>
					</tr>
					<tr>
						<td><label for="lastname">Last Name<font color="#990033">*</font></label></td>
						<td><input type="text" name="lastname" required></td>
					</tr>
					<tr>
						<td><label for="usermail">E-Mail</label></td>
						<td><input type="email" name="usermail"></td>
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
