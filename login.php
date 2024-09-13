<?php

session_start();

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'mobilestore');

$username=$_POST['username'];
$pass=$_POST['password'];

$s="select * from registration where username='$username' && password='$pass'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1)
{
    $_SESSION['username']=$username;
    echo"login successful";
}
else{
    echo"login unsuccessful";
}

header("refresh:1; url=MobileStore.php")
?>