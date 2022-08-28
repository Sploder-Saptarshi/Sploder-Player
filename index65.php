<?php
$err = $_GET["err"]
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "https://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> -->
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
<title>Sploder</title>
<!--{BASE}-->
<!--{CANONICAL}-->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!--<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">-->
<meta http-equiv="expires" content="0" />
<meta http-equiv="Pragma" content="no-cache" />
<meta name="title" content="<!--{BROWSER_TITLE}-->" />
<meta name="robots" content="nofollow" />
<meta name="viewport" content="width=device-width, user-scalable=no">
<link href='https://fonts.googleapis.com/css?family=Raleway:800,700,500' rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="/css/gameslaun.css" />
<!--{STYLESHEETS}-->
<!--{SCRIPTS}-->
<script type="text/javascript">var _sf_startpt=(new Date()).getTime()</script>
<!--{CSS}-->
<!--{JAVASCRIPT}-->
<!--{CONFIRM_UNLOAD}-->
</head>
<body>
<body id="<!--{BODY_ID}-->" class="<!--{BODY_CLASS}-->" <!--{ONLOAD}-->
<!--{BODY_START}-->
<div id="main">
<div id="header">
<div id="tools">
<!--{TOOLS}--></div>
<ul id="topnav">
<li id="nav5"><a>Log out</a></li>
<?php
echo '<li id="nav1"><a  >Make a Game</a></li>'
?>
</ul>
<div id="title"><h1><span class="hide"><!--{PAGE_TITLE}--></span></h1></div>
</a>
</div><script>window.boops = "Idling";</script>
<div id="page">
<div id="content"><h3>Play Games by URL</h3><p>Enter the game URL (not thumbnail or xml) below to play it!
</p><p>Format: https://www.sploder.com/games/members/tebandall/play/a-story-in-a-nutshell/</p><?php echo "<p>" . $err . "</p>" ?>
<form action="https://sploder.us.to/gamehandler.php" method="GET">
<div>
<label for="username">Enter game URL: &nbsp;</label><input class="urlthing" type="text" id="username" name="url" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="100"/><input class="urlthing" type="hidden" value="1" id="step" name="step" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="100"/>

</div>
<div>
<div>
<br>
<style>
.postbutton {float: right}
.urlthing {width: 99%}
</style>
<input type="submit" name="" class="postbutton loginbutton" value="Play!">&nbsp;&nbsp;&nbsp;
</div>
</form>
</div><!--{CONTENT_PROMO}--><div class="spacer">&nbsp;</div></div>
<div class="spacer">&nbsp;</div>
</div>
</div>
<br>
<!--{BODY_END}-->
</body>
</body>
</html>
