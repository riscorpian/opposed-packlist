<?php ob_start('ob_gzhandler'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
	<title>#opposed @ irc.irchighway.net</title>
	
	<link rel='stylesheet' type='text/css' href='/styles/opposed.css'/>
	<link rel='stylesheet' type='text/css' href='/styles/packlist.css'/>
	
	<script type='text/javascript' src='/scripts/jquery-1.7.min.js'></script>
	<script type='text/javascript' src='/scripts/jquery.transform-0.9.3.min.js'></script>
	<script type='text/javascript' src='/scripts/jquery.easing.1.3.js'></script>
	<script type='text/javascript' src='/scripts/opposed.js'></script>
	<script type='text/javascript' src='/scripts/packlist.js'></script>
	
</head>
<body>
	
	<div id='hcontainer'>
		
		<div id='header'><div>
			<!--<ul id='nav'><li><a href='#/blug'>blug</a></li><li><a href='#/packlist'>packlist</a></li><li><a href='#/projects'>projects</a></li><li><a href='#/about'>about</a></li></ul>-->
			<a id='hlink' href='irc://irc.irchighway.net/opposed' title='Visit the IRC channel'><em>opposed</em><span>ON IRC.IRCHIGHWAY.NET</span></a>
		</div></div><div id='color'><div></div></div>
		
	</div>
	
	<div id='container'>
		
<?php require('includes/packlist.php'); ?>
		
	</div><div id='container2'></div>
	
	<div id='footerfade'></div>
	
	<div id='throbber'></div>
	
</body>
</html>