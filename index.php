<?php
	include('common.php');
	$page = $_GET['page'];
	$pages = array('main',
		'releasenotes-0.4',
		'releasenotes-0.5',
		'releasenotes-0.5.1',
		'gsoc2010',
	);
	if ( !in_array($page, $pages) || $page == '')
		$page = $pages[0];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>PyMT : Open source library for multitouch development</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="ROBOTS" content="INDEX, FOLLOW"/>
	<meta name="description" lang="en" content="PyMT is an open source library for developing multi-touch applications. It is completely cross platform (Linux/OSX/Win) and released under the terms of the GNU LGPL."/>
	<meta name="description" content="python, multitouch, library, nui, wimp, gstreamer, pygame, module, creativity, interface, ui, pil, multi-touch, wiimote"/>
	<link rel="stylesheet" type="text/css" href="styles/default.css"/>
	<script src="styles/prototype.js" type="text/javascript" charset="utf-8"></script>
	<script src="styles/effects.js" type="text/javascript" charset="utf-8"></script>
	<script src="styles/glider.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	<div id="kivy">
		<div class="content">
			Starting a new project? We highly recommend using <a href="http://kivy.org/">Kivy</a> (<a href="http://kivy.org/">http://kivy.org</a>) instead of PyMT. It's the <a href="http://kivy.org/docs/faq.html#how-is-kivy-related-to-pymt">'next generation PyMT !'</a>
		</div>
	</div>
	<div id="wrapper">
		<div id="header">
			<a href="http://github.com/tito/pymt"><img style="position: absolute; top: 50; right: 0; border: 0;"
								   src="http://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png"
								   alt="Fork me on GitHub" /></a>
			<div id="release">
				PyMT <?=$version?>, released on <?=$date?>.<br/>
				<a href="/download">Download now</a> - <a href="?page=releasenotes-<?=$version?>">Release notes</a>
			</div>
			<div id="logo">
			<a href="."><img src="styles/logo<?=(rand()%5>2)?'_blue':''?>.png" title="PyMT" alt="Logo PyMT"/></a>
			</div>
			<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fpymt.eu%2F&amp;layout=button_count&amp;show_faces=true&amp;width=150&amp;action=like&amp;colorscheme=dark&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px; position:absolute; margin-left: 150px; margin-top: -20px;" allowTransparency="true"></iframe>
			<div id="menu">
				<ul>
					<li><a class="home" href="./#home">Home</a></li>
					<li><a class="download" href="./#download">Download</a></li>
					<li><a class="support" href="./#support">Support</a></li>
					<li><a class="planet" href="http://pymt.eu/planet/">Planet</a></li>
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
            <p>
                <a href="http://validator.w3.org/check?uri=referer">
                    <img src="http://www.w3.org/Icons/valid-xhtml10-blue" alt="Valid XHTML 1.0 Transitional" height="31" width="88" />
                </a>
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
