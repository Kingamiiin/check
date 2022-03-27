<?php

$name = $_POST['name'];
$email = $_POST['emailaddress'];
$Message = $_POST['message'];
$to = 'mohammadaminhaidari25@gmail.com';
$Subject = 'Amin Personal Blog';

$txt = "Name = ". $name . "\r\n Email = " . $email . "\r\n Message =" . $Message;

$headers .= "From: noreply@aminblog.com" . "\r\n";

if($email!=NULL){
    mail($to,$Subject,$txt,$headers);
}    
header("Location:Thank.html");
?>