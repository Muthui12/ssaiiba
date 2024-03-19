<?php
//get data from form  


$email= $_POST['email'];

$to = "ssaiibbashop@gmail.com";
$txt ="Email = " . $email ;
$headers = "From: ssaiibbashop@gmail.com" . "\r\n" .
"CC: ssaiibbashop@gmail.com";
if($email!=NULL){
    mail($to,$txt,$headers);
}
//redirect
header("../index.html");
?>