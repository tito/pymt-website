<div id="home" class="page">
	<h1>Home</h1>
	<div id="features-glider">
		<div class="controls">
				<a href="#section4">4</a>
				<a href="#section3">3</a>
				<a href="#section2">2</a>
				<a href="#section1" class="active">1</a>
		</div>
		<div class="scroller">
			<div class="content">
				<div id="section1" class="section">
					<img src="sections/section1.jpg" title="Native multitouch" alt=""/>
				</div>
				<div id="section2" class="section">
					<img src="sections/section2.jpg" title="Lot of customizable widgets" alt=""/>
				</div>
				<div id="section3" class="section">
					<img src="sections/section3.jpg" title="More time to be creative !" alt=""/>
				</div>
				<div id="section4" class="section">
					<img src="sections/section4.jpg" title="Integrate with other toolkits" alt=""/>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" charset="utf-8">
	<!--
	var glider = new Glider('features-glider', {duration: 0.5, frequency: 10});
	glider.start();
	-->
	</script>
</div>

<div id="homecontent" class="page">
	<div class="page-content">
		<p>
			PyMT is an open source library for developing multi-touch applications. It is completely cross platform (Linux/OSX/Win) and released under the terms of the GNU LGPL.
		</p>
		<p>
			It comes with native support for many multi-touch input devices, a growing library of multi-touch aware widgets, hardware accelerated OpenGL drawing, and an architecture that is designed to let you focus on building custom and highly interactive applications as quickly and easily as possible.
		</p>
		<p>
			Since PyMT is a pure Python library, you can take advantage of its highly dynamic nature and use any of the thousands of high quality and open source python libraries out there.
		</p>
	</div>
</div>

<div id="example" class="page">
	<h1>Usage Example</h1>
	<div class="page-content">
		<p>
			Writing PyMT applications is really easy. The shortest usable PyMT program is only two lines long.
		</p>
		<p>
			The following example shows a little more of the framework. The code just draws a filled circle under each touch.
		</p>

		<? include('example_snippet.html'); ?>

		<p>
			To get started, take a look at the many examples that come with PyMT!
		</p>
	</div>
</div>

<div id="download" class="page">
	<h1>Download</h1>
	<div class="page-content">
		<h2>Stable version</h2>
		<p>
			The latest stable version is <?=$version?>, released on <?=$date?>. See <a href="?page=releasenotes">Release Notes</a> for more details.
		</p>
		<table>
			<tr>
				<th>Operating System</th>
				<th>Instructions</th>
			</tr>
			<tr>
				<td>
					<img src="styles/icons/os_linux.png" alt="" title="linux"/>
					Linux (Ubuntu 9.10, 10.4 and 10.10)
				</td>
				<td><a href="http://pymt.txzone.net/wiki/index.php/DevGuide/InstallPymtUbuntu">How to install</a></td>
			</tr>
			<tr>
				<td>
					<img src="styles/icons/os_macosx.png" alt="" title="macosx"/>
					MacOSX (10.6)
				</td>
				<td><a href="http://pymt.txzone.net/wiki/index.php/DevGuide/InstallPymtMacOSX">How to install</a></td>
			</tr>
			<tr>
				<td>
					<img src="styles/icons/os_windows7.png" alt="" title="windows7"/>
					Windows (Seven)
				</td>
				<td><a href="http://pymt.txzone.net/wiki/index.php/DevGuide/InstallPymtWindows">How to install</a></td>
			</tr>
		</table>

		<p>You can get the complete list of availables packages on PyPI. Check the <a href="http://pypi.python.org/pypi/PyMT">PyMT PyPI page</a> for more information.</p>

		<h2>Source code</h2>

		<p>
			We use <a href="http://github.com/">Github</a> for hosting our development version of PyMT.
			Take a look at our instructions on <a href="http://pymt.txzone.net/wiki/index.php/DevGuide/GrabSourceCode">how to grab the source code</a> on our wiki!
		</p>
	</div>
</div>

<div id="support" class="page">
	<h1>Support</h1>
	<div class="page-content">
		<h2>Documentation</h2>
		<ul>
			<li><a href="http://pymt.txzone.net/docs/api/">API documentation</a> - Pure-API pages.</li>
			<li><a href="http://pymt.txzone.net/wiki/">Wiki documentation</a> - the most up-to-date documentation content</li>
			<li><a href="http://pymt.txzone.net/wiki/index.php/DevGuide/Index">Programming Guide</a> - how to start with our toolkit</li>
		</ul>

		<h2>Contribute</h2>
		<p>
			If you have found a bug or want a feature, you can report it on our <a href="http://code.google.com/p/pymt/issues/list">Bug tracker</a>.
		</p>
		<p>
			If you need advice or help, you can send a mail to the <a href="http://groups.google.com/group/pymt-users">PyMT Users mailing list</a>, or if you know IRC, you can /join us on #pymt @ irc.freenode.net.
		</p>
	</div>
</div>
