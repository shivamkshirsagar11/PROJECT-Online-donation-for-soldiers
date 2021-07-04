<?php
require "all_variables_code.php";
if(isset($_POST['submit'])){
$to=$e_mail;
$subject = "Recipt of Donation(test project)!";
$message = "***********(PHP PROJECT)***********\n\n";
$message .= "Below provided information is VERY confidential\nPlease DO NOT SHARE IT WITH ANYONE!!\n\nName: ".$uname."\nEmail(Username): ".$e_mail."\nMobile No(password): ".$mno."\nAmount Paid: ₹ ".$amount."/-"."\nMode of Transaction: ".$method."\nPaytime city: ".$city."\nTransaction ID(very important): ".$tno."\n\nThank you!!! For using our Website.\nsession end time: ".$date;
$message .= "\n\n***********(PHP PROJECT)***********";
$headers = "From:test.mai.shivam@gmail.com";
if(mail($to, $subject, $message, $headers)) {
	header('location:thank.php');
} else {
die("some error occured!!!");
}
}
?>
<html>
	<head>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel|Fauna+One">
		<style>
			.d1,.new{
				margin-left:150px;
				margin-right:150px;
			}

			table,th,td{
				border:1px solid black;
				border-collapse:collapse;
				border-radius:10px;
				padding:10px;
				font-family:Cinzel, serif;
				text-align:center;
			}
			@media print{
				.d1{
					visibility:visible;
				}
				body{
					visibility:hidden;
				}
			}
		</style>
	</head>
	
	<body>
		<div class="d1">
			<form method="POST">
			<table class='table'>
			<div class="inside">
				<tr>
				<td colspan="2" style="font-family:Sofia, sans-serif; font-size:24px;" class="font-effect-shadow-multiple"><img src="im1.jpg" height="75" width="75" align="center">National Defence Fund</td></tr>
				<tr>
				</tr>
				<tr>
				<th>Name:</th><td><?php echo $uname;?></td></tr>
				<tr>
				<th>Email:</th><td><?php echo $e_mail;?></td></tr>
				<tr>
				<th>Mobile No. :</th><td><?php echo $mno;?></td></tr>
				<tr>
				<th>City:</th><td><?php echo $city;?></td></tr>
				<tr>
				<th>Pin code:</th><td><?php echo $pin;?></td></tr>
				<tr>
				<th>State:</th><td><?php echo $state;?></td></tr>
				<tr>
				<th>Country:</th><td><?php echo $country;?></td></tr>
				<tr>
				<th>Amount:</th><td><?php echo "Rs. ".$amount;?></td></tr>
				<tr>
				<th>Transaction Id:</th><td><?php echo $tno;?></td></tr>
				<tr>
				<th>Payment Method:</th><td><?php echo $method;?></td></tr>
				<tr>
				<th>Card No/Account No.</th><td><?php echo $number;?></td></tr>
				<tr>
				<th>Date & Time:</th><td><?php echo $time;?></td></tr>
				</div>
				</table>
			</form>
				</div>
				<div class="new">
				<form method="POST">
				<button onclick="window.print()">Print Reciept</button> <input type="submit" name="submit" value="Thank you note">
                </form>
				</div>
	</body>
</html>