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

$Model=$_POST['Model'];
$Price=$_POST['Price'];
$Name=$_POST['Name'];
$Address=$_POST['Address'];
$Pin=$_POST['Pin'];
$City=$_POST['City'];
$Mobile=$_POST['Mobile'];
$Email=$_POST['Email'];
$PaymentMode=$_POST['PaymentMode'];

$sql="INSERT INTO buynow (Model,Price,Name,Address,Pin,City,Mobile,Email,PaymentMode) VALUES('$Model','$Price','$Name','$Address','$Pin','$City','$Mobile','$Email','$PaymentMode')";

if(!mysqli_query($con,$sql))
{
    echo "Not Submitted";
}
else
{
    echo "Submitted";
}

?>