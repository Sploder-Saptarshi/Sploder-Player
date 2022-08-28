<?php
  header("Content-type: text/xml");

  
$arr = $_GET["xmlurl"];
$mainxml = file_get_contents("https://cdn.sploder.com" . $arr);
echo $mainxml;
  
?>