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
				height: 409px;
    			border-radius: 1px;
  				box-shadow: 0px 0px 0px 8px rgba(0,0,0,0.3);
			}
			
		</style>

	<?php 
	session_start(); 
	if(!isset($_SESSION['email'])) {
		header("Location: /wad/login"); }
	?>
	</head>

	<body>
		<br /><br /><br />
		<div id="center" align="center">
			<br><br><br><br>
			<p> You are logged in. </p>
			<form action="http://localhost/wad/logout">
				<input type="submit" value="Logout">
			</form>
		</div>
	</body>
</html>
