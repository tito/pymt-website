<div id="releasenotes" class="page">
	<h1>Release Notes</h1>
	<div class="page-content">
		<p>
			PyMT 0.5 is a major release. We've worked hard to make PyMT easier, faster and more organized.
			See the full <a href="http://pymt.eu/wiki/Changelog05/Changelog05">Changelog</a>
			and a <a href="http://pymt.eu/wiki/Documentation/MigrateTo05">Migration guide</a> for 0.5.
		</p>
		<p>
			Since we all love statistics, here are some numbers about PyMT 0.5:
			<ul>
				<li>69 bugs resolved</li>
				<li>546 commits (without merges)</li>
				<li>764 files changed</li>
				<li>49758 code insertions(+)</li>
				<li>97989 code deletions(-)</li>
				<li>3 Core developers + 10 contributors!</li>
			</ul>
		</p>

		<h2>Portable Version</h2>
		<p>
			For Mac OS X and Windows we now provide a portable version of PyMT.
			These packages contain all dependencies required to run PyMT and are packaged into a single zipfile (or .dmg for OS X).
		</p>
		<p>
			Installing PyMT on these platforms has never been easier! (On Linux, it's a piece of cake anyways.)
		</p>

		<h2>C/Cython Core</h2>
		<p>
			We've benchmarked our toolkit and came to the conclusion that we could speed up some performance-critical sections by using C code.
			But we like Python, so we've made a compromise: we are using <a href="http://cython.org/">Cython</a>
			to speed up event dispatching, the graphx (and the new graphics) package and matrix transformations.
			Basically, Cython is a superset of Python that compiles down to C.
			Here are some comparisons (the numbers being seconds, less is better):
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
			<td>Graphx: draw rectangle (50000 rects) 100 times</td>
			<td>157.76</td>
			<td>84.54</td>
			<td>4.46</td>
		</tr>
		<tr>
			<td>Widget: creation (10000 MTWidgets)</td>
			<td>0.79</td>
			<td>0.64</td>
			<td>0.49</td>
		</tr>
			<td>Widget: event dispatching (1000 on_update calls in 10*1000 MTWidgets)</td>
			<td>22.62</td>
			<td>37.88</td>
			<td>8.96</td>
		</tr>
		</table>

		<p>
			Check our official <a href="http://pymt.eu/wiki/Devel/Benchmark">PyMT benchmark</a> page on our wiki.
		</p>

		<h2>Native Multitouch Support for Linux</h2>
		<p>
			PyMT now includes native support for Linux multitouch kernel events, starting from Linux 2.6.32 with appropriate hardware.
			A special thanks to <a href="http://recherche.enac.fr/~chatty/">St&eacute;phane Chatty</a> for introducing multitouch kernel events in the Linux kernel!
		</p>

		<h2>New Layouts</h2>
		<p>
			Our layout engine has been rewritten from scratch to improve flexibility and to allow for easier manipulation. We now support widget scaling by percentage (for example: scale one widget to 25% of the entire parent layout's width, another to 75%).
			You can now switch between a pixel-accurate constraint or a percentage constraint.
		</p>

		<h2>New Scatter</h2>
		<p>
			The scatter widget has been rewritten to be able to handle more than 2 fingers and it does not rely on OpenGL matrix anymore.
			We are using our own transformation library, accelerated by using C, to perform the necessary matrix calculation.
			This transformation library will be used for our next OpenGL 3.0 capable PyMT version.
		</p>

		<h2>Spelling Keyboard</h2>
		<p>
			During GSoC, Christopher introduced a new spelling keyboard. You can read more about this on his blog at <a href="http://the-space-station.com/2010/5/30/pymt-gsoc-week-1">PyMT Gsoc - Week 1</a>.
			To make it happen new spelling core providers have been introduced that rely on PyEnchant or OSX' AppKit.
		</p>

		<h2>New Graphics Library</h2>
		<p>
			In order to be compatible with OpenGL 3.0, we've started an experimental abstraction module named graphics (as opposed to graphx, mind you).
			The goal is to replace the current, less-efficient graphx module with this new module.
			We are focusing on speed, removal of direct rendering calls (because they're slow and deprecated) and leverage the power of shaders.

			<i>It's a work in progress, and still not used internally. We encourage you to play with it, though.</i>
		</p>

		<h2>New Widgets</h2>
		<p>
			Even though we've focused on stabilizing PyMT, three new widgets are available:
			<ul>
				<li><a href="http://pymt.eu/docs/api/api-pymt.ui.widgets.klist.html">MTList</a>: A replacement for MTKineticList. MTList is easier to use and resolves a lot of KineticList's bugs!</li>
				<li><a href="http://pymt.eu/docs/api/api-pymt.ui.widgets.image.html">MTImage</a>: A convenience wrapper for loading an image and adding it to the scene.</li>
				<li><a href="http://pymt.eu/docs/api/api-pymt.ui.widgets.composed.vkeyboardspellcheck.html">MTSpellVKeyboard</a>: The aforementioned spelling keyboard.</li>
			</ul>
		</p>

		<h2>Documentation</h2>
		<p>
			The documentation has been massively improved and a lot of sections have runnable code examples at the bottom of their API reference.
			Check the <a href="http://pymt.eu/docs/api/api-pymt.ui.widgets.button.html#examples">MTButton examples</a>!
			You can even download the code to run it.
			All the examples are also available inside the folder examples/framework/ that ships with PyMT.
		</p>
		<p>
			In addition, we've reworked the <a href="http://pymt.eu/wiki">PyMT Wiki</a> to make it more user-friendly.
			We are now using it as our main documentation system.
		</p>

		<h2>Stabilization and Performance Improvements</h2>
		<p>
			We've started to write unit tests, run static code analyzers (PyLint), and perform benchmarks, to improve PyMT and avoid regressions.
			Our explicit goal is a very stable, fast and productive 1.0 release.
			In the last 1.5 years, we've continuously improved our skills, and thus PyMT's source code.
			That means: Less memory usage, faster loading, more documentation, code refactoring and so on.
			We want to make PyMT the best multitouch toolkit on earth. Help is of course appreciated, but for now, let's celebrate!
		</p>
	</div>
</div>
