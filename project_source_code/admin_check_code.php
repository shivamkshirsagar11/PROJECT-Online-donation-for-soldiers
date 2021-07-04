<?php
session_start();
require_once "time_code.php";
$_SESSION["destroy"] = false;
$count = 0;
$_SESSION['login_u'] = "nothing rn";
$_SESSION['login_p'] = "nothing rn";
//admin check
require_once "connect.php";

if(isset($_POST['submit'])){
$u = mysqli_real_escape_string($link,$_POST['uname']);
$p = mysqli_real_escape_string($link,$_POST['pass']);

$_SESSION['login_u'] = $u;
$_SESSION['login_p'] = $p;

$query = "SELECT * FROM `info_donor` WHERE 1";
$result = mysqli_query($link,$query);
$row = mysqli_num_rows($result);
for($i=0;$i<$row;$i++){
if($i<3){
$user = mysqli_fetch_assoc($result);
	if(($user['email'] == $u) and ($user['mobile'] == $p))
	{
        $send = $u."@gmail.com";
		$to=$send;
		$subject = "ADMIN LogIn Allert!!!";
		$message = "***********(PHP PROJECT)***********\n\n";
		$message .= "This message is to inform you that you have logged In to NDF(test) Website\n\nName: ".$user['name']."\n\nMobile No: ".$user['mobile']."\n\nThank you!!! For using our Website.\nsession end time: ".$date;
		$message .= "\n\n***********(PHP PROJECT)***********";
		$headers = "From:test.mai.shivam@gmail.com";
		if(mail($to, $subject, $message, $headers)) {
		$count++;
		$_SESSION["destroy"] = 1;
		header('location: admin_table.php');
		} else {
		die("some error occured!!!");
		}
	}
}
else{
	$user = mysqli_fetch_assoc($result);
	if(($user['email'] == $u) and ($user['mobile'] == $p))
	{
		$to=$u;
		$subject = "LogIn To Test Donation Website!";
		$message = "***********(PHP PROJECT)***********\n\n";
		$message .= "This message is to inform you that you have logged In to NDF(test) Website\n\nName: ".$user['name']."\n\nMobile No: ".$user['mobile']."\n\nThank you!!! For using our Website.\nsession end time: ".$date;
		$message .= "\n\n***********(PHP PROJECT)***********";
		$headers = "From:test.mai.shivam@gmail.com";
		if(mail($to, $subject, $message, $headers)) {
		$count++;
		$_SESSION["destroy"] = 1;
		header('location: donatee.php');
		} else {
		die("some error occured!!!");
		}
	}
}
}
}
?>