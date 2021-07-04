<?php
session_start();
if($_SESSION["destroy"]){
$get = $_SESSION["destroy"];
echo "<h2>"."You can check your donation History!!"."</h2>";
echo "<form method='POST'>"."<div class='logout'>"."<input type='submit' value = 'LogOut' name='submit'>"."</div>"."</form>";
if(isset($_POST['submit']) and $get){
	session_destroy();
	header('location:home.php');
	$get = 0;
}
require_once "connect.php";
$login_u = $_SESSION["login_u"];
$login_p = $_SESSION["login_p"];
$query = "SELECT * FROM `info_donor` WHERE `email` = '$login_u' and `mobile` = '$login_p'";
$result = mysqli_query($link,$query);
echo "<div style='width:35%;margin:auto;'>";
echo "*******************************************************************************";
echo "</div>";
while($user = mysqli_fetch_assoc($result)){
echo "<div style='width:35%;margin:auto;'>";
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
}
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