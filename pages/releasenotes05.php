<div id="releasenotes" class="page">
	<h1>Release Notes</h1>
	<div class="page-content">
		<p>
			PyMT 0.5 is a major version. We've focus to make PyMT easier, faster, proper.
			You can read the full <a href="http://pymt.eu/wiki/Changelog05/Changelog05">Changelog</a>,
			and <a href="http://pymt.eu/wiki/Documentation/MigrateTo05">Migration guide for 0.5</a>.
		</p>
		<p>
			In numbers, this version is :
			<ul>
				<li>69 bugs resolved</li>
				<li>546 commits (without merges)</li>
				<li>764 files changed</li>
				<li>49758 insertions(+)</li>
				<li>97989 deletions(-)</li>
				<li>3 Core developers + 10 contributors !</li>
			</ul>
		</p>

		<h2>Portable version</h2>
		<p>
			On MacOSX and Windows platform, PyMT are now packaged in a "portable" version.
			Theses version contain all dependencies to run PyMT, packaged into a single zipfile.
		</p>
		<p>
			PyMT installation for both platform are not anymore the Hell !
		</p>

		<h2>C/Cython Core</h2>
		<p>
			We've bench our toolkit, and found that we can speedup some part by using C code.
			But we like Python, so we've made a compromise: we are using <a href="http://cython.org/">Cython</a>
			to speed up event dispatching, graphx package and matrix transformation.
		</p>

		<table>
		<tr>
			<th>Test</th>
			<th><a href="http://paste.pocoo.org/show/225616/">0.3</a></th>
			<th><a href="http://paste.pocoo.org/show/225617/">0.4</a></th>
			<th><a href="http://paste.pocoo.org/show/250140/">0.5</a></th>
		</tr>
		<tr>
			<td>Core: label creation (10000 * 10 a-z)</td>
			<td>-</td>
			<td>3.35</td>
			<td>3.30</td>
		</tr>
		<tr>
			<td>Graphx: draw lines (50000 x/y) 100 times</td>
			<td>435.25</td>
			<td>11.44</td>
			<td>6.84</td>
		</tr>
		<tr>
			<td>Graphx: paint line (500 x/y) 100 times</td>
			<td>30.75</td>
			<td>19.37</td>
			<td>15.45</td>
		</tr>
		<tr>
			<td>Graphx: draw rectangle (50000 rect) 100 times</td>
			<td>157.76</td>
			<td>84.54</td>
			<td>4.46</td>
		</tr>
		<tr>
			<td>Widget: creation (10000 MTWidget)</td>
			<td>0.79</td>
			<td>0.64</td>
			<td>0.49</td>
		</tr>
			<td>Widget: event dispatch (1000 on_update in 10*1000 MTWidget)</td>
			<td>22.62</td>
			<td>37.88</td>
			<td>8.96</td>
		</tr>
		</table>

		<p>
			Check our official <a href="http://pymt.eu/wiki/Devel/Benchmark">PyMT benchmark</a> page on our wiki.
		</p>

		<h2>Native Multitouch support for Linux</h2>
		<p>
			PyMT now include a native support of linux kernel event, starting from 2.6.32 with appropriate hardware.
			A special thanks to <a href="http://recherche.enac.fr/~chatty/">St&eacute;phane Chatty</a> for introducing kernel event in Linux kernel.
		</p>

		<h2>New layouts</h2>
		<p>
			Our layout engine have been rewritten from scratch, to improve our flexibity, and be easier to manipulate. We are now supporting "percentage" distribution (for example: one widget to 25% width, another to 75%). You can now switch between pixel size constraint or percent size constraint.
		</p>

		<h2>New scatter</h2>
		<p>
			Scatter widget has been rewritten to be able to handle more than 2 fingers, and it not rely on OpenGL matrix anymore.
			We are using our own transformation library, accelerated in C, to make matrix calculation.
			This transformation library will be used for our next OpenGL 3.0 PyMT version.
		</p>

		<h2>Spelling keyboard</h2>
		<p>
			With GSOC, Christopher introduce a spelling keyboard. You can check his blog about his <a href="http://the-space-station.com/2010/5/30/pymt-gsoc-week-1">PyMT Gsoc - Week 1</a>.
			To make it happen, a new spelling core providers has been introduced, and rely on PyEnchant or OSX App Kit.
		</p>

		<h2>New graphics library</h2>
		<p>
			In order to be OpenGL 3.0 compatible, we've started an experimental library named graphics. At term, the goal is to replace graphx library with this new graphics library.
			We are focusing on speed, remove direct rendering call, use power of shaders.

			<i>It's a work in progress, and still not used internally.</i>
		</p>

		<h2>New widgets</h2>
		<p>
			Even if we've focus our mind to stabilize PyMT, 2 new widgets are available :
			<ul>
				<li><a href="http://pymt.eu/docs/api/api-pymt.ui.widgets.klist.html">MTList</a>: the replacement for MTKineticList. MTList is easier to use, and resolve lot of KineticList bugs !</li>
				<li><a href="http://pymt.eu/docs/api/api-pymt.ui.widgets.image.html">MTImage</a>: load and use image as a widget</li>
				<li><a href="http://pymt.eu/docs/api/api-pymt.ui.widgets.composed.vkeyboardspellcheck.html">MTSpellVKeyboard</a>: the famous spelling keyboard, read the section "Spelling keyboard" :)</li>
			</ul>
		</p>

		<h2>Documentation</h2>
		<p>
			Documentation have been improved, and lot of section have some examples included inside API. You can see the <a href="http://pymt.eu/docs/api/api-pymt.ui.widgets.button.html#examples">MTButton examples</a>, and you can even download the code to run it.
			All the examples are also available inside examples/framework/.
		</p>
		<p>
			In addition, we've reworked the <a href="http://pymt.eu/wiki">PyMT Wiki</a> to make it more user-friendly. We are pushing ourself to use it as our main documentation system.
		</p>

		<h2>Stabilization and performance</h2>
		<p>
			We've starting to write unit test, run static code analyser (PyLint), and do some benchmark, to improve PyMT. We are focusing to make 1.0 very stable and productive. In more that 1.5 year, we are continuing to improve our skills, and so, PyMT source code. That's mean: less memory usage, faster loading, more documentation, code factorization...
		</p>

	</div>
</div>
