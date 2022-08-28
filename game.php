<?php echo "<script>window.boops = \"Playing: " . $_GET["title"] . "\";</script>"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $_GET['title']?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<link rel="stylesheet" href="/css/sploder_v2.css" type="text/css" />
<link rel="stylesheet" href="/css/gameslaun.css" type="text/css" />
<link rel="stylesheet" href="/css/publishpage.css" type="text/css" />

<script language="JavaScript" type="text/javascript" src="includes/peekaboo.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
<script type="text/javascript" language="Javascript">
</script>
</head>
<body bgcolor="#FFFFFF">
<div id="main" style="width:720;">
<div id="header">
<div id="tools">
<!--{TOOLS}--></div>
<ul id="topnav">
<li id="nav5"><a>Log out</a></li>
<?php
echo '<li id="nav1"><a  >Make a Game</a></li>'
?>
</ul>
<br><br><center>
<div id="show" style="width:720px;" ><a name="kickdown" style="height:1px; overflow:hidden;"></a>
<div class="showcontent">
<h4><?php echo $_GET["title"]?></h4>
<div class="gameobject" style="width: 640px; height: 480px;">
<div id="flashcontent"><?php if ($_GET["target"] == "platformer") {
    echo '<iframe src="https://www.sploder.com/fullgame2_b21.swf?s=' . $_GET["pubkey"] . '" width="640px" height="480px" style="border:none;"></iframe>';
    }
elseif ($_GET["target"] == "classic") {
    echo '<iframe src="https://www.sploder.com/game-ssl.swf?s=' . $_GET["pubkey"] . '" width="640px" height="480px" style="border:none;"></iframe>';
     }
elseif ($_GET["target"] == "physics") {
    echo '<iframe src="https://sploder.us.to/fullgame5_b27.swf?s=' . $_GET["pubkey"] . '" width="640px" height="480px" style="border:none;"></iframe>';

    }
elseif ($_GET["target"] == "arcade") {
    echo '<iframe src="https://sploder.us.to/fullgame7_b21.swf?s=' . $_GET["pubkey"] . '" width="640px" height="480px" style="border:none;"></iframe>';

    }
elseif ($_GET["target"] == "3dadventure") {
    echo '<iframe src="https://sploder.us.to/fullgame3_b08.swf?s=' . $_GET["pubkey"] . '" width="640px" height="480px" style="border:none;"></iframe>';

      }
    
 else {header('Location: https://sploder.us.to/index65.php?err=INVALID LINK<br>Is the format correct?');} 

?>
</div>
</div><br>
</div></center><center>
<div class="showbottom"><div class="showbottomright">&nbsp;</div>
</div><br />
<div align="center">
</div>
<div class="homelink">
<a href="http://sploder.us.to/index65.php">&laquo; Play another game</a><br><br></center>
</div>
</body>
</html>