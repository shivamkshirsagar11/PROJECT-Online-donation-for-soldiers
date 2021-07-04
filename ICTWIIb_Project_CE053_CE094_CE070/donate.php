<?php
	require "donate_code.php";
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
				background-size: 100%, 100%;
			}
			body {
				margin:auto;
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
				background-repeat:repeat;
				background-size:100% 100%;
				align:center;
			}
			th{
				font-size:24px;
			}
			td{
				font-size:18px;
			}
			.f2{
				width:50%;
				border:2px solid black;
				border-radius:12px;
				margin-left:390px;
				/* //margin-right:40px; */
				background-color:#b2d3ed;
				padding:15px;
				
			}
			.table{
				align:center;
			}
			.b1{
				font-size:18px;
			}
			.b2{
				font-size:18px;
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
		  <a class="active" href="donate.php">Donate now</a>
		  <a href="login.php">Login</a>
		  <a href="why.php">FAQs</a>
		  <a href="about.php">About us</a>
		</div>
		</div>
		</br>
		</br>
		<form method="POST" class="f2">
			<table class='table'>
				<h1 style="font-size:36px;">Online Contributions / Donations to National Defence Fund</h1><hr>
				<p>National Defence Fund, (NDF) accepts voluntary donations from Individuals, Organizations, Trusts, Companies and Institutions etc.</p>
				<p>All donations towards NDF are exempt from Income Tax under section 80(G)</p><hr>
				<h2 style="color:Red; font-size:28px;">Personal Information:-</h2><hr>
				<tr>
				<th class='table'>Name:</th><td><input id="r" type="text" name="uname"></td><td><?php if(isset($_POST['submit']) and ((strlen($_POST["uname"]) < 5) or empty($_POST["uname"]))) {echo "<h3 style='color:red;'>"."Username cannot be empty or less than 5 words!!"."</h3>"; $count++;}?></td></tr>
				<tr>
				<th>Email:</th><td><input id="r" type="text" name="mail"></td> <td><?php if(!empty($_POST["mail"]) and isset($_POST['submit'])) {
	$email_ = ($_POST["mail"]);
    if (!filter_var($email_, FILTER_VALIDATE_EMAIL)) {
      echo "<h3 style='color:red;'>"."Invalid email format"."</h3>";
	  $count++;
    }
  }
 else if(empty($_POST["mail"]) and isset($_POST['submit'])){
	echo "<h3 style='color:red;'>"."Enter The Email!!"."</h3>";
	$count++;
 } 
  ?></tr>
				<tr>
				<th>Mobile No:</th><td><input id="r" type="number" name="m_no"></td> <td><?php if(isset($_POST['submit']) and ((strlen($_POST["m_no"]) < 10) or empty($_POST["m_no"]) or (strlen($_POST["m_no"]) > 10))) {echo "<h3 style='color:red;'>"."Mobile number cannot be empty and must be of 10 digits"."</h3>"; $count++;}?></td> </tr>
				<tr>
				<th>Adress:</th><td><textarea id='r' type="text" rows="3" cols="20" name="adata"></textarea></td> <td><?php if(isset($_POST['submit']) and empty($_POST["adata"])) {echo "<h3 style='color:red;'>"."Address cannot be empty !!"."</h3>"; $count++;}?></td> </tr>
				
				<tr>
				<th>City:</th><td><input id="r" type="text" name="city"></td> <td><?php if(isset($_POST['submit']) and empty($_POST["city"])) {echo "<h3 style='color:red;'>"."City field cannot be empty !!"."</h3>"; $count++;}?></td> </tr>
				<tr>
				<th>Pin code:</th><td><input id="r" type="number" name="pin"></td><td><?php if(isset($_POST['submit']) and empty($_POST["pin"])) {echo "<h3 style='color:red;'>"."Pincode field cannot be empty !!"."</h3>"; $count++;}?></td> </tr>
				<tr>
				<th>State:</th><td><input id="r" type="text" name="state"></td><td><?php if(isset($_POST['submit']) and empty($_POST["state"])) {echo "<h3 style='color:red;'>"."State field cannot be empty !!"."</h3>"; $count++;}?></td></tr>
				<tr>				
				<th>Country:</th><td><input type="text" name="country" id="r"></td><td><?php if(isset($_POST['submit']) and empty($_POST["country"])) {echo "<h3 style='color:red;'>"."Country field cannot be empty !!"."</h3>"; $count++;}?></td></tr>
				</table>
				<hr>
				<h2 style="color:Red; font-size:28px;">Payment detail:-</h2>
				<td><?php if(isset($_POST['submit']) and ((($_POST["amount"]) < 1) or empty($_POST["amount"]) or (($_POST["amount"]) > 500000))) {echo "<h3 style='color:red;'>"."Amount cannot be empty and must be under 5Lacs!!"."</h3>"; $count++;}?></td>
				<hr>
				<table>
				<tr>
				<th rowspan="2">Amount:</th><td><input id="r" type="number" name="amount"></td></tr>
				<tr>
				<td style="color:red; font-size:12px">Amount should be entered as whole Rupees in a multiple of Rs. 1/-</td></tr>
				<tr>
				<th rowspan="2">Payment Method:</th><td><input type="radio" id="m1" name="pay_m" value="Debit_Card"><label for="m1">Debit/Cradit Card</label></td></tr>
				<tr>
				<td><input type="radio" id="m2" name="pay_m" value="Mobile_Banking"><label for="m2">Mobile Banking</label></td></tr>
				<tr>
				</table>
				<?php if(isset($_POST['submit']) and empty($_POST["pay_m"])) {echo "<h3 style='color:red;'>"."Please select payment method!!"."</h3>"; $count++;}?>
				<p>Please note that you can pay only through your 'Net Banking Account' of Indian Banks</p>
				<table>
				<td><button class="button b1" type="reset" value="reset" name="reset">Reset</button></td><td><input class="b2" type="submit" name="submit" value="Proceed To Pay"></td></tr>
				</table>
			</table>
		</form>
		
		
	</body>
</html>