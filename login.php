<?php
session_start();
$db=mysqli_connect("localhost","root","jagad1sh","authentication");
if (isset($_POST['login_btn'])) {
	# code...
	session_start();
	$username=mysql_real_escape_string($_POST['username']);
//$email=mysql_real_escape_string($_POST['email']);
$password=mysql_real_escape_string($_POST['password']);
//$password2=mysql_real_escape_string($_POST['password2']);
$password=md5($password);
$sql="SELECT * from users WHERE username='$username' AND password='$password'";
if (mysqli_num_rows($result)==1) {
	# code...
	$_SESSION['message']="You are now Logged in";
	$_SESSION['username']=$username;
	header("location:home.php");
}else{
	//failed
	$_SESSION['message']="The username or passwords wrong";
}

}
?>





