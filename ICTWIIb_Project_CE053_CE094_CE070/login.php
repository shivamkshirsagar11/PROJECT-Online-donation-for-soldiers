<?php
require "admin_check_code.php";
?>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
		<style>
			#a{
				font-size:40px;
				font-family:"Sofia", sans-serif;
				color:white;
				text-align:center;
			    background-image: url(images.jpg);
				background-repeat:no-repeat;
				background-size: 100%;
			}
			body {
				margin:0;
			}

			.topnav {
				overflow: hidden;
				background-color: #f1f1f1;
			}

			.topnav a {
			  float: left;
			  display: block;
			  color: black;
			  text-align: center;
			  padding: 14px 16px;
			  text-decoration: none;
			  font-size: 17px;
			  border-bottom: 3px solid transparent;
			}

			.topnav a:hover {
			  border-bottom: 3px solid red;
			}

			.topnav a.active {
			  border-bottom: 3px solid green;
			}
			body{
				background-image: url(flag.jpg);
				background-repeat:no-repeat;
				background-size:100% 100%;
			}
			table,th,td{
			  border:1px solid black;
			  border-collapse:collapse;
			  padding: 15px;
			  margin:auto;
			  /* //background-color:#b2d3ed; */
			}
			.id1{
				margin-left:500px;
				margin-right:500px;
				background-color:#b2d3ed;
				border:2px solid black;
				border-radius:12px;
			}
			.new{
				background-image: url(images.jpg);
				background-repeat:no-repeat;
				background-size: 100%;
			}

	</style>
	</head>
	<body>
	<div class="new">
		<h1 id="a" class="font-effect-shadow-multiple"><div><img src="im1.jpg" width="75" height="75"></div>National Defence Fund</h1>
		<div class="topnav">
		  <a href="home.php">Home</a>
		  <a href="donate.php">Donate now</a>
		  <a class="active" href="login.php">Login</a>
		  <a href="why.php">FAQs</a>
		  <a href="about.php">About us</a>
		</div>
		</div>
		</br>
		</br>
		<form class="id1" method="POST">
		<h1> Details of Contribution to Nation Defence Fund</h1>
		<h2 style="color:red;">	Admin/Normal user can login from here</h2><hr>
		<h3> For Normal user:</h3>
		<p><b> Username is provided to you by email!</b></p>
		<p> <b>Password is provided to you by email!</b></p>
		<p> <b>Normal user can see his/her payment history</b></p>
		<hr>
		<h3> <b>For Admin:</b></h3>
		<p> <b>Admin has sparate username and password</b></p>
		<p> <b>Admin can see all record</b></p><hr>
		<table class='table'>

		<tr><th class='table'>Username*:</th><td><input type="text" name="uname"></td></tr>
		<tr><th>Password**:</th><td><input type="password" name="pass"></td></tr>
		<tr><td class='table'><input type="reset" value="Reset"></td><td><input type="submit" value="Search Payment History" name='submit'></td></tr>
		<?php if(!$count and isset($_POST['submit'])) echo "<h3 style='color:red;'>"."Username or Password is wrong Try again!!"."</h3>"; ?>
		</table>
		</br>
		</br>
		
		</form>
		
	</body>
</html>