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
			
			#logo {
				background-color: rgba(0, 0, 0, 0);
				width: 416px;
				height: 95px;
				background-image: url(img/AllMedical-logo.png);
			}

			#center {
				margin-left: auto;
    			margin-right: auto;
    			width: 500px;
				height: 550px;
    			border-radius: 1px;
  				box-shadow: 0px 0px 0px 8px rgba(0,0,0,0.3);
			}
			
			#home {
			
				background-color: rgba(0, 0, 0, 0);
				width: 98px;
				height: 50px;
				background-image: url(img/home.png);
			
			}
			
			#request {
			
				background-color: rgba(0, 0, 0, 0);
				width: 330px;
				height: 36px;
				background-image: url(img/requestapp.png);
			
			}
			
		</style>

	</head>

	<body>
		<br /><br /><br />
		<div id="center" align="center">
			<br><br><br><br>
			<div id="logo"></div>
			<a href="/wad"><div id="home"></div></a>
			<div id="request"></div><br>
			<form action="app-request.php" method="post">
				<table>
					<tr>
						<td valign="top"><label for="reason">Reason<font color="#990033">*</font></lable></td>
						<td><textarea  name="reason" maxlength="1000" cols="25" rows="6" required autofocus></textarea></td>
					</tr>
					<tr>
						<td><label for="doctor">Doctor<font color="#990033">*</font></label></td>
						<td><input type="text" name="doctor" required></td>
					</tr>
					<tr>
						<td><label for="date">Preferred date<font color="#990033">*</font></label></td>
						<td><input type="date" name="date" required></td>
					</tr>
					<tr>
						<td><label for="time">Preferred time<font color="#990033">*</font></label></td>
						<td><input type="time" name="time" required></td>
					</tr>
				</table>
				<br>
				<p>(<font color="#990033">*</font> - required)</p>
				<input type="submit" value="Submit">
			</form>
		</div>
	</body>
</html>
