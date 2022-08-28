<?php 
  header("Content-type: text/xml");

$thing = $_GET["loc"];
$arr = explode('-',trim($_GET["loc"]));
$gamedata = file_get_contents("https://www.sploder.com/php/getleaderboard.php?loc=" . $arr[0] . "leadeboard" . $arr[1]);
echo $gamedata;
?>