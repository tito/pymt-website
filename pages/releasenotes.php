<div id="releasenotes" class="page">
	<h1>Release Notes</h1>
	<div class="page-content">
		<p>
			The PyMT 0.4 is a major version. Lot of effort and improvement have been done, specially on the core basics.
		</p>

		<h2>Backend splitting</h2>
		<p>
			We have redesigned our core base, to avoid usage of Pyglet, a all-in-one library. Every features like Window management, Text rendering, Image loading, Audio, Video and Camera have been splitted.
		</p>
		<p>
			Each core have an abstraction, with at least one implementation based on a library. We call it providers. The current best combinaison of backend is Pygame + PyGST/Gstreamer.
		</p>
		<p>
			Here is the list of implementation state for 0.4.
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
			We've decided to use <a href="http://pyopengl.sourceforge.net/">PyOpenGL</a> library instead of Pyglet.GL implementation. The pyglet implementation is based only on ctypes, but PyOpenGL is easier on some sides, and provide an acceleration module (you gain about 10% without doing nothing on your code.)
		</p>

		<h2>Speed improvements</h2>
		<p>
			We have designed a simple Cache system, and improved our skills on Python by doing some benchmarks on internals. That's mean our graphx package (all drawing functions) have been reworked for speed.
		</p>
		<p>
			Take a new look at our <a href="/docs/api/">API</a>, some functions as drawLabel() are not CPU consuming now.
		</p>

		<h2>New Animation Framework</h2>
		<p>
			The animation framework have been completly redesigned. You can now create animation in a very easy way, and apply it on most attributes. We have included 31 types of animation. Take a look at our showcase in <code>examples/animation/showcase.py</code>
		</p>

		<h2>Designer</h2>
		<p>
			We have started a new project, combining an text editor + a OpenGL Rendering window. You can code and run your code on screen, without waiting the PyMT loading each run.
		</p>
		<p>
			The PyMT Designed is still in early stage, and can be run with this command :
		</p>
		<pre> python -m pymt.tools.designer -n </pre>

		<h2>New widgets</h2>
		<ul>
			<li>Coverflow - a coverflow like widget</li>
			<li>Video - split video widget into several one (base, without and with UI)</li>
			<li>Container - a basic container for core-object (Label, Image, Camera, Video...)</li>
			<li>Side panel - a container that sick on a side of the screen</li>
		</ul>

		<h2>Improvement On Inputs</h2>
		<p>
			Some improvement have been done on Windows Seven multitouch support.<br/>
			We also support MacOSX and their multitouch trackpad.
		</p>
		<p>
			We have also designed 2 new modules :
		</p>
		<ul>
			<li>Fix CCV: a work around the odd behaviour in CCV where every touch outside of the calibration grid is mapped to (0,0).</li>
			<li>Retain touch: a post-processor to delay the 'up' event of a touch, to reuse it under certains conditions. This module is designed to prevent finger lost on some hardware/setup.</li>
		</ul>

		<h2>Documentation</h2>
		<p>
			This is still our biggest problem, and we are aware about that. We have started a <a href="http://pymt.txzone.net/wiki/index.php/DevGuide/Index">Developer's Guide</a> (but not finished.), and improved our <a href="http://pymt.txzone.net/docs/api/">API</a>.
		</p>

		<h2>Bugfixes</h2>
		<p>
			Same as each version, 0.4 come with lot of bugfixes and changes on widgets. We've listen to you, and we are happy to stabilize each time PyMT toolkit :)
		</p>
	</div>
</div>
