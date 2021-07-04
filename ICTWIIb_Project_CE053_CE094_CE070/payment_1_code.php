<?php
session_start();
if(isset($_POST['submit'])){
$_SESSION['card_name'] = $_POST['cardname'];
$store = $_POST['cardnumber'];
$len = strlen($store);
$display = "Last four digits : ";
$display2 = $store[$len-4].$store[$len-3].$store[$len-2].$store[$len-1];
$display = $display.$display2;
$_SESSION['card_number'] = $display;
header('location: receipt.php');
}
?>