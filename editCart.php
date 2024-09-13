<?php
session_start();
$name=$_POST['name0'];
$price=$_POST['name1'];
$Event=$_POST['Event'];

$product  =array($name,$price);


    
if($Event=="Delete"){
  
  session_destroy();

}
header('location:viewCart.php');

?>