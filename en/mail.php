<?php
header("Access-Control-Allow-Origin: *");
$subject = "Email form:".$_POST["subject"];
$message = $_POST["message"];
$headers = "From:".$_POST["sender"];

if($message!=""){mail("williammalo2@gmail.com",$subject,$message,$headers);}
?>