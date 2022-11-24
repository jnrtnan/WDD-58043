<?php
$server = "localhost";
$db = "login";
$username = "root";
$password = "";

$conn = mysqli_connect($server,$username,$password,$db);

if(isset($_POST['user']));
{
	$username = $_POST['user'];
	$password = $_POST['text'];

	$sql = "Select * from users where username = '$username' AND password = '$password'";
	$result = mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result) ==0)
	{
		echo "<font color= green><strong>Login Success:</strong> $username </font>";
		
		exit();
	}
	
	else
	{
		echo"<font color= red>Failed to Success </font>";
		exit();
	}
}
?>