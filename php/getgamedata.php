<?php 
$gamedata = file_get_contents("https://www.sploder.com/php/getgamedata.php?g=" . $_GET["g"]);
echo $gamedata;
?>