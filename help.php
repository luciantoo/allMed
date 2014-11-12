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
				height: auto;
    			border-radius: 1px;
  				box-shadow: 0px 0px 0px 8px rgba(0,0,0,0.3);
			}
			
			#waw {
				background-color: rgba(0, 0, 0, 0);
				background-image: url(img/who-are-we.png);
				width: 224px;
				height: 62px;
				
			}
			
			#text {
				padding-left:5em;
				padding-right:5em;
				width: 300px;
				height: auto;
				alignment-adjust: left;
			
			}
			
		</style>

	</head>

	<body>
		<br /><br /><br />
		<div id="center" align="center">
			<br><br><br>
			<a href="/wad"><img src="img/AllMedical-logo.png" alt="logo" title="logo"/></a>
			<div id="waw"></div>
			<div id="text" align="left"><p>&nbsp;&nbsp;&nbsp;&nbsp;We are a website dedicated to simplifying all secretarial aspects of going to the doctor. </p></div>
			
			<p>Contact us</p>
			<form name="contactform" method="post" action="contact-email.php">
			<table>
			<tr>
			<td><label for="name">Name<font color="#990033">*</font></label></td>
			<td><input  type="text" name="name" required></td>
			</tr>
			<tr>
			<td><label for="email">E-mail<font color="#990033">*</font></label></td>
			<td><input  type="email" name="email" required></td></td>
			</tr>
			<tr>
			<td valign="top"><label for="message">Message<font color="#990033">*</font></label></td>
			<td><textarea  name="message" maxlength="1000" cols="25" rows="6" required></textarea></td>
			</tr>
			</table>
			<input type="submit" value="Submit">
			</form>
			<br><br><br>
			
		</div>
	</body>
</html>
