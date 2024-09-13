<?php

$con = mysqli_connect('127.0.0.1','root','');

if(!$con)
{
    echo "Not Submitted";
}

if(!mysqli_select_db($con,'mobilestore'))
{
    echo "Not Submitted"; 
}

$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Message=$_POST['Message'];

$sql="INSERT INTO contactus (Name,Email,Message) VALUES('$Name','$Email','$Message')";

if(!mysqli_query($con,$sql))
{
    echo "Not Submitted";
}
else
{
    echo "Submitted";
}

?>