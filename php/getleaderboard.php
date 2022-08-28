<?php 
$gamedata = file_get_contents("https://www.sploder.com/php/getleaderboard.php?loc=" . $_GET["loc"] . "&nocache=" . $_GET["nocache"]);
echo $gamedata;
?>