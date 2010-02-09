<?php
	include('common.php');
	$page = $_GET['page'];
	$pages = array('main', 'releasenotes');
	if ( !in_array($page, $pages) || $page == '')
		$page = $pages[0];
?>
<html>
<head>
	<title>PyMT</title>
	<link rel="stylesheet" type="text/css" href="styles/default.css"/>
	<script src="styles/prototype.js" type="text/javascript" charset="utf-8"></script> 
	<script src="styles/effects.js" type="text/javascript" charset="utf-8"></script> 
	<script src="styles/glider.js" type="text/javascript" charset="utf-8"></script> 
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<div id="logo">
				<a href="."><img src="styles/logo.png" title="PyMT"/></a>
			</div>
			<div id="release">
				PyMT <?=$version?>, released on <?=$date?>.<br/>
				<a href="#download">Download now</a> - <a href="?page=releasenotes">Release notes</a>
			</div>
			<div id="menu">
				<ul>
					<li><a class="home" href="./#home">Home</a></li>
					<li><a class="download" href="./#download">Download</a></li>
					<li><a class="support" href="./#support">Support</a></li>
					<li><a class="planet" href="http://pymt.txzone.net/planet/">Planet</a></li>
				</ul>
			</div>
			<br/>
		</div>

		<? include(sprintf('pages/%s.php', $page)); ?>

		<div id="footer">
			<p>
				Awesome logo made by <a href="http://naldzgraphics.net/">Ronald Bein</a><br/>
				Hosted by <a href="http://ikse.net/">Ikse</a>, thanks a lot Alexx !<br/>
				Theme inspired by <a href="http://www.preloaded.com/about/">Preloaded</a><br/>
				<a href="mailto:tito (arobas) bankiz (dot) org">Contact the webmaster</a>
			</p>
		</div>
	</div>

	<script type="text/javascript">
	var pkBaseURL = (("https:" == document.location.protocol) ? "https://txzone.net/piwik/" : "http://txzone.net/piwik/");
	document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
	</script><script type="text/javascript">
		try {
			var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 4);
			piwikTracker.trackPageView();
			piwikTracker.enableLinkTracking();
		} catch( err ) {}
	</script><noscript><p><img src="http://txzone.net/piwik/piwik.php?idsite=4" style="border:0" alt=""/></p></noscript>

</body>
</html>
