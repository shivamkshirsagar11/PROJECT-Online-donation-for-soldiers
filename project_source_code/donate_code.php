<?php
session_start();
require_once "connect.php";
require "time_code.php";
$count=0;
$update = 0;
if(isset($_POST["submit"])){
if(!(empty($_POST["uname"])))
{
   if( empty($_POST["mail"]) or empty($_POST["m_no"]) or empty($_POST["amount"]) or empty($_POST["city"]) or empty($_POST["adata"]) or empty($_POST["pin"]) or empty($_POST["country"]) or empty($_POST["state"]))
 {
   //echo "<h2>"."some fields are empty please fill them first!!!"."</h2>"."</br>";
   $count++;
 }
   if(strlen($_POST["uname"]) < 5)
 {
     //echo "<h2>"."Username must be greater than 5 words!..."."</h2>"."</br>";
	 $count++;
 }
   if((strlen($_POST["m_no"]) < 10) or (strlen($_POST["m_no"]) > 10))
 {
     //echo "<h2>"."Contact number must be of 10 digits!..."."</h2>"."</br>";
	 $count++;
 }
 if((($_POST["amount"]) < 1) or (($_POST["amount"]) > 500000))
 {
    // echo "<h2>"."As per guideline donated amount must be under 5Lacs!..."."</h2>"."</br>";
	 $count++;
 }
 if(!(isset($_POST["pay_m"])))
 {
    // echo "<h2>"."Please select payment methode to pay!..."."</h2>"."</br>";
	 $count++;
 }
}
else {
//echo "<h2>"."Username is priority enter it first!!"."</h2>"."</br>";
     $count++;
}
}
// sql querys
if(($count == 0) and (isset($_POST['submit']))){
	$uname = mysqli_real_escape_string($link,$_POST['uname']);
	$mno = mysqli_real_escape_string($link,$_POST['m_no']);
	$e_mail = mysqli_real_escape_string($link,$_POST['mail']);
	$amount = mysqli_real_escape_string($link,$_POST['amount']);
	$add = mysqli_real_escape_string($link,$_POST['adata']);
	$city = mysqli_real_escape_string($link,$_POST['city']);
	$pin = mysqli_real_escape_string($link,$_POST['pin']);
	$state = mysqli_real_escape_string($link,$_POST['state']);
	$country = mysqli_real_escape_string($link,$_POST['country']);
	$method = $_POST['pay_m'];
// random string gen
$tno = NULL;
$char = "abcdefghijklmnopqrstuvwxyz0123456789abcdefghijklmnopqrstuvwxyz0123456789@";	
$charArray = str_split($char);	
for($i=0;$i<16;$i++){
	$random = array_rand($charArray);
	$tno .= $charArray[$random];
}
//finish
$query = "SELECT * FROM `info_donor`";
$result = mysqli_query($link,$query);
$user = mysqli_fetch_assoc($result);
if($user){
	if(true) {
		$insert_q = "INSERT INTO `info_donor`(`name`, `email`, `mobile`, `t_number`, `time`, `amount`, `address`, `city`, `code`, `state`, `country`) VALUES ('$uname','$e_mail','$mno','$tno','$date','$amount','$add','$city','$pin','$state','$country')";
		$result = mysqli_query($link,$insert_q);
		if(($result) and ($method == "Debit_Card")) {
			header('location: payment.php');
		}
		else if(($result) and ($method == "Mobile_Banking"))
			  header('location: payment_1.php');
		}
}
$_SESSION['name'] = $uname;
$_SESSION['m_number'] = $mno;
$_SESSION['email'] = $e_mail;
$_SESSION['t_number'] = $tno;
$_SESSION['amount'] = $amount;
$_SESSION['city'] = $city;
$_SESSION['pin'] = $pin;
$_SESSION['state'] = $state;
$_SESSION['country'] = $country;
$_SESSION['time'] = $date;
$_SESSION['pay_method']=$method;
}
?>