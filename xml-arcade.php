<?php
  header("Content-type: text/xml");
  $arr = explode('-',trim($_GET["xmlurl"]));
$mainxml = file_get_contents("https://cdn.sploder.com" . $arr[0] . "projects" . $arr[1]);
echo $mainxml;
?>