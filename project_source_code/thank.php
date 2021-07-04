<?php
require "all_variables_code.php";
?>
<html>
	<head>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
		<style>
		@media print{
		.d2{
			visibility:hidden;
			width:100px;
			margin-left:80%;
			/* //margin-bottom:5px; */
		}
		body{
			visibility:visible;
		}
	}
		</style>
	</head>
	<body>
	<div class="d1">
		<h1 style="font-family:Sofia, sans-serif; font-size:48px; text-align:center;" class="font-effect-shadow-multiple"><img src="im1.jpg" height="80" width="80" align="center">National Defance Fund</h1><hr>
		<h2>Date: <?php echo date("Y/m/d");?></h2><hr>
		<p style="font-size:20px">Thank You For Donating To NDF.</p>
		<p style="font-size:20px"><b><?php echo $uname;?></b> ,We are thankful to you for you have donated Rs <?php echo "<b>".$amount."</b>";?>. to our National Defance Fund. Our team are thanking you for this great work. We are hoping for your wealth.</p>
		<p style="font-size:20px">On behalf of army recipients, I thank you for your generous donation.It means lot to us that you wanted to support the work of Indian army and We really appreciate your kindness in nominating us to help them. We are assuring you that your donation will only use to help army. We will use this fund to family of army who lost their life for our country. Your donation must appreciated.We want to help our army soldier what ever they need for living. But we can only be therefor every soldier who need us with help from people like you, so thank you.</p>
		<p style="font-size:20px">Thank you again for your thoughtfulness and wonderful patriotic spirit. Every single donation we receive furthers our mission of saying <b>"Thank You"</b> to those who serve. The recipients of your generosity will remember your kindness forever. And I will always be appreciative of your support and encouragement for NDF.</p>
		<hr>
		<div>
		<img src="stamp1.png" height="120px" width="170px" align="left"><p style="font-size:20px">With the best wishes</br>Chairmen of NDF
		</br>National Informatics Centre
		</br>Contents Provided By Prime Minister's Office</p>
		</div></div>
		</br>
		<hr>
		<div style="display: inline;">
		<button class="d2" onclick="window.print()">Print Note</button>
		<form method="POST">
		</br>
<input class="d2" type="submit" value="Home Page" name="submit"></div>	
</form>
</body>
<?php
if(isset($_POST['submit'])){
	header('location:home.php');
}
?>
	</div>
	</body>
</html>