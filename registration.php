<?php

session_start();

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'mobilestore');

$username=$_POST['username'];
$pass=$_POST['password'];

$s="select * from registration where username='$username'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1)
{
    echo"username already taken";
  
}
else{
    $reg="insert into registration(username,password) values('$username','$pass')";
    mysqli_query($con,$reg);
    echo"registratiom successful";
}
header("refresh:3; url=login.html")

?>