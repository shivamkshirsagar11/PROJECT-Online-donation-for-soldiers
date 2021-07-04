<?php
session_start();
if($_SESSION["destroy"]){
$get = $_SESSION["destroy"];
echo "<h2>"."You're Admin you can view all donation fund transfer history"."</h2>";
echo "<form method='POST'>"."<div class='logout'>"."<input type='submit' value = 'LogOut' name='submit'>"."</div>"."</form>";
if(isset($_POST['submit']) and $get){
	session_destroy();
	header('location:home.php');
	$get = 0;
}
require_once "connect.php";
$query = "SELECT * FROM `info_donor` WHERE 1";
$result = mysqli_query($link,$query);
$count = 0;
$i = 1;
echo "<div style='width:35%;margin:auto;'>";
echo "*******************************************************************************";
echo "</div>";
while($user = mysqli_fetch_assoc($result)){
if($count<3){
	$count++;
	continue;
}
echo "<div style='width:35%;margin:auto;'>";
echo "<h3>"."Standard number count : ".$i."</h3>";
echo "<table>";
echo "<tr>"."<th>"."Name: "."</th>"."<td>".$user['name']."</td>"."</tr>";
echo "<tr>"."<th>"."Email: "."</th>"."<td>".$user['email']."</td>"."</tr>";
echo "<tr>"."<th>"."Mobile No: "."</th>"."<td>".$user['mobile']."</td>"."</tr>";
echo "<tr>"."<th>"."Amount Donated: "."</th>"."<td>".$user['amount']."</td>"."</tr>";
echo "<tr>"."<th>"."Time: "."</th>"."<td>".$user['time']."</td>"."</tr>";
echo "<tr>"."<th>"."Transaction Number: "."</th>"."<td>".$user['t_number']."</td>"."</tr>";
echo "<tr>"."<th>"."Address: "."</th>"."<td>".$user['address']."</td>"."</tr>";
echo "<tr>"."<th>"."City: "."</th>"."<td>".$user['city']."</td>"."</tr>";
echo "<tr>"."<th>"."PinCode: "."</th>"."<td>".$user['code']."</td>"."</tr>";
echo "<tr>"."<th>"."State: "."</th>"."<td>".$user['state']."</td>"."</tr>";
echo "<tr>"."<th>"."Country: "."</th>"."<td>".$user['country']."</td>"."</tr>";
echo "</table>";
echo "*******************************************************************************";
echo "</div>";
$i++;
}
echo "<h2>"."<b>"."Total donation count: "."</b>".($i-1)."</h2>";
}
else{
	header('location:logout.php');
}
?>
<html>
<head>
<style>
.logout{
	width:40px;
	/* //border:1px solid black; */
	border-radius:7px;
	margin-left:80%;
	
}
</style>
</head>
</html>
