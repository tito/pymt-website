<div id="releasenotes" class="page">
	<h1>Release Notes</h1>
	<div class="page-content">
		<p>
			PyMT 0.5.1 is a minor release.
			See the full <a href="http://pymt.eu/wiki/Changelog/Changelog051">Changelog</a>
			and a <a href="http://pymt.eu/wiki/Documentation/MigrateTo051">Migration guide</a> for 0.5.1.
		</p>

		<h2>New probesysfs/mtdev input providers</h2>
		<p>
			Next Ubuntu is coming with a new multitouch architecture. We've do the minimal work to use new mtdev library for getting multitouch information inside PyMT. You can read more about it in the <a href="http://pymt.eu/wiki/Documentation/MigrateTo051">Migration guide</a>.
		</p>

		<h2>New single user desktop</h2>
		<a href="styles/images/pymt-0.5.1-single-user-desktop.jpg">
			<img src="styles/images/pymt-0.5.1-single-user-desktop.mini.jpg" alt="PyMT single user desktop" class="floatimg"/>
		</a>
		<p>
			We've focused about multi-users possibilities, but we wanted to show that we are able also to construct very simple desktop focused for single user.
			On this screenshot, you can see that we have exactly the same applications available from multi-users desktop.
		</p>
		<p>
			When an application is open, you can go back to the main menu by touching a zone in a corner of the screen. Each application is launched in fullscreen.
		</p>
		<p>
			This desktop example is just a 137 lines of Python.
		</p>

		<h2>Bugfixes</h2>
		<p>
			Except probesysfs/mtdev, all the rest in this version is bugfixes, and documentation fixes. Most important is :
		</p>
		<ul>
			<li>Remove stars import in PyMT, except for our classes</li>
			<li>No more relative import</li>
			<li>Fixes error-on-copy from OpenGL (prevent non native data conversion)</li>
			<li>Textinput: label now render is the bounds of textinput (no more overflow).</li>
			<li>Boxlayout: padding and spacing are correctly calculated.</li>
		</ul>
	</div>
</div>
