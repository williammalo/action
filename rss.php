<?php 
header("Access-Control-Allow-Origin: *");
header ("Content-Type:text/xml");
echo file_get_contents("http://action-utility-quebec.blogspot.ca/rss.xml");
?>