<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$subject=$_post['subject'];
$message= $_POST['message'];

$to = "ssaiibbashop@gmail.com";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Subject =" . $subject. "\r\n Message =" . $message;
$headers = "From: ssaiibbashop@gmail.com" . "\r\n" .
"CC: ssaiibbashop@gmail.com";
if($email!=NULL){
    mail($to,$txt,$headers);
}
//redirect
header("../index.html");
?>