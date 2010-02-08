<div id="releasenotes" class="page">
	<h1>Release Notes</h1>
	<div class="page-content">
		<p>
			PyMT 0.4 is a major version. Much effort has been put into it and many improvements have been made, especially right at the core.
		</p>

		<h2>Backend splitting</h2>
		<p>
			We have redesigned our core. We wanted to avoid using Pyglet, an all-in-one library. All core tasks like window management, text rendering,
			image loading, audio and video playback, as well as camera recording have been splitted into independent modules.
		</p>
		<p>
			For each of those core tasks we introduced an abstraction layer with at least one working implementation (always utilizing an external library).
			Such a concrete implementation of a feature is called a <em>Provider</em> for its task. This means that you can use your own combination of providers as you see fit.
			The best combination of providers currently is the Pygame provider and the PyGST/Gstreamer provider.
		</p>
		<p>
			What follows is a complete list of all available providers. The table also shows the tasks that each provider is capable of performing.
		</p>
		<table width="100%">
		<tbody>
			<tr>
				<th>Libraries / Features</th>
				<th>Windowing</th>
				<th>Image</th>
				<th>Text</th>
				<th>Audio</th>
				<th>Video</th>
				<th>Camera</th>
			</tr>
			<tr>
				<td>GLUT (provided by <a href="http://pyopengl.sourceforge.net/">PyOpenGL</a>)</td>
				<td align="center">X (buggy)</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td><a href="http://www.pygame.org/">Pygame</a></td>
				<td align="center">X</td>
				<td align="center">X</td>
				<td align="center">X</td>
				<td align="center">X (wav)</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td><a href="http://www.pythonware.com/products/pil/index.htm">PIL</a></td>
				<td>&nbsp;</td>
				<td align="center">X</td>
				<td align="center">X</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td><a href="http://www.cairographics.org/pycairo/">PyCairo</a></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td align="center">X</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td><a href="http://gstreamer.freedesktop.org/">GST</a> + <a href="http://pygstdocs.berlios.de/">PyGst</a></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td align="center">X</td>
				<td align="center">X</td>
				<td align="center">X</td>
			</tr>
			<tr>
				<td><a href="http://sourceforge.net/projects/opencvlibrary/">OpenCV 2.0</a></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td align="center">X</td>
			</tr>
		</tbody>
		</table>

		<h2>Switch to PyOpenGL</h2>
		<p>
			We've decided to use the <a href="http://pyopengl.sourceforge.net/">PyOpenGL</a> library instead of Pyglet's OpenGL bindings.
			PyOpenGL is easier in some cases and provides an acceleration module (you gain about 10% without changing anything in your code).
		</p>

		<h2>Speed improvements</h2>
		<p>
			We have designed a simple caching system and improved our Python skills by doing some benchmarks on internal functions. As a result, our graphx package (all drawing functions) has been optimized for speed.
		</p>
		<p>
			Take a look at our new <a href="/docs/api/">API</a> and see that some functions like drawLabel() are not that CPU consuming anymore.
		</p>

		<h2>New Animation Framework</h2>
		<p>
			The animation framework has been redesigned from scratch. You can now create animations very easily and use them to alter almost any attribute.
			We have included 31 animations already. Take a look at our showcase in <code>examples/animation/showcase.py</code>
		</p>

		<h2>Designer</h2>
		<p>
			We have started a new project, combining a text editor and an OpenGL rendering window. You can code and run your code on screen, without having to wait for PyMT to load each run.
		</p>
		<p>
			The PyMT Designer is still in an early stage and can be run with this command:
		</p>
		<pre> python -m pymt.tools.designer -n </pre>

		<h2>New widgets</h2>
		<ul>
			<li>Coverflow - a coverflow like widget</li>
			<li>Video - we split the video widget into several different ones (without and with UI)</li>
			<li>Container - a basic container for core objects (Label, Image, Camera, Video...)</li>
			<li>Side panel - a container that sits on a side of the screen like a drawer</li>
		</ul>

		<h2>Input Improvements</h2>
		<p>
			Some improvements were achieved for Windows Seven multitouch support.<br/>
			We now also support MacOSX and the newer generation multitouch trackpads found in the new MacBooks.
		</p>
		<p>
			We have also designed a new module to improve touch input:
		</p>
		<ul>
			<li>Retain touch: a post-processor that delays the 'up' event of a touch, to reuse it under certain circumstances. This module is designed to prevent losing a touch on some hardware/setup (e.g. due to bad recognition).</li>
		</ul>

		<h2>Documentation</h2>
		<p>
			This is still our biggest problem, but we are aware of it. We have started a <a href="http://pymt.txzone.net/wiki/index.php/DevGuide/Index">Developer's Guide</a> (not finished yet) and improved our <a href="http://pymt.txzone.net/docs/api/">API</a> reference.
		</p>

		<h2>Bugfixes</h2>
		<p>
			As usual, the new version 0.4 comes with loads of bugfixes, improvements and changes. We've listened to you and we are happy to become better with every release. :)
		</p>
	</div>
</div>
