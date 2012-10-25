<!DOCTYPE html>
<meta charset="utf-8">
<title>ACTION UTILITY</title>

<style>
body{text-align:center}
h1{display:block;color:#333}
</style>
<body>

<?php
$subject = "Email form:".$_POST["subject"];
$message = $_POST["message"];
$headers = "From:".$_POST["sender"];

if($message!=""){mail("info@actionutilityquebec.com",$subject,$message,$headers);}
echo "<br><h1>Mail sent.</h1>";
?>

<a style=color:#07d href=contact>Back</a>