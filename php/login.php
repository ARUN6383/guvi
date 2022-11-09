<?php
session_start();
$conn= new mysqli('localhost','root','','regi');

 $email=$_POST['email'];
$password=$_POST['password'];

$s="select * from register where email='$email' && password='$password' ";
$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);

if($num==1){
	header('location:/GUVI/profile.html');
}
else
{

	header('location:/GUVI/login.html');
}
?>
