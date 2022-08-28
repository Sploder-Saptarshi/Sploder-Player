<?php 
$gamedata = file_get_contents("https://www.sploder.com/php/getgameprops.php?pubkey=" . $_GET["pubkey"]);
echo $gamedata;
?>