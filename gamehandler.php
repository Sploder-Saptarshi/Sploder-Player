
<?php
  
  $url = $_GET["url"];
    // shit extractor pls dont mind

  if ($_GET["step"] == "1") {
  if (file_get_contents($url))
  {
    $lines = file($url);
    if ("8" == strlen($lines[58])) {
        $a = str_replace("\"", "", $lines[171]); }
     else {
    $a = str_replace("\"", "", $lines[203]); }
      $b = str_replace("s: ", "", $a);
      $c = str_replace(",", "", $b);
      $r = str_replace(" ", "", $c);

      $d = str_replace("<meta property=\"og:title\" content=\"", "", $lines[20]);
      $e = str_replace("\" />", "", $d);

      $l = str_replace("<meta name=\"twitter:description\" content=\"Play this awesome game made by ", "", $lines[34]);
      $m = str_replace(" game maker!\" />", "", $l);
      $n = str_replace("using Sploder's", "", $m);
      $p = str_replace(strtok($n, " "), "", $n);
      $q = str_replace(" ", "", $p);
     echo "<meta http-equiv=\"refresh\" content=\"0;URL='https://sploder.us.to/game.php?&title=" . $e . "&pubkey=" . $r . "&target=" . $q . "\" />";
    }
    else
    {
        header('Location: http://sploder.us.to/index65.php?err=INVALID LINK');
    }}
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
<body id="<!--{BODY_ID}-->" class="<!--{BODY_CLASS}-->">
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
</div>
<div id="page">
<div id="content"><h3>Please Wait</h3><p>The game you requested is currently being processsed, this may take a while
</p>
<br>
<!--{CONTENT_PROMO}--><div class="spacer">&nbsp;</div></div>
<div class="spacer">&nbsp;</div>
</div>
</div>
<br>
<!--{BODY_END}-->
</body>
</body>
</html>
