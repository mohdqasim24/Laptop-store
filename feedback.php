<?php

$con = mysqli_connect('127.0.0.1','root','');

if(!$con)
{
    echo "Not connected to server";
}

if(!mysqli_select_db($con,'mobilestore'))
{
    echo "Database not selected"; 
}

$Issue=$_POST['Issue'];
$Description=$_POST['Description'];
$Email=$_POST['Email'];

$sql="INSERT INTO feedback (Issue,Description,Email) VALUES('$Issue','$Description','$Email')";

if(!mysqli_query($con,$sql))
{
    echo "Not Submitted";
}
else
{
    echo "Submitted";
}

header("refresh:3; url=MobileStore.php")

?>