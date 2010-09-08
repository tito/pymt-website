<div id="releasenotes" class="page">
	<h1>Release Notes</h1>
	<div class="page-content">
		<p>
			PyMT 0.5.1 is a minor release.
			See the full <a href="http://pymt.eu/wiki/Changelog/Changelog051">Changelog</a>
			and a <a href="http://pymt.eu/wiki/Documentation/MigrateTo051">Migration guide</a> for 0.5.1.
		</p>

		<h2>New probesysfs/mtdev Input Providers</h2>
		<p>
			The next version of <a href="http://www.ubuntu.com">Ubuntu</a> will come with a new multitouch architecture.
			We've taken a few first steps towards an integration of their new mtdev library and PyMT.
			This will allow for an even broader support of multitouch devices in PyMT on Ubuntu.
			You can read more about it in the <a href="http://pymt.eu/wiki/Documentation/MigrateTo051">Migration guide</a>.
		</p>

		<h2>New Single User Desktop</h2>
		<a href="styles/images/pymt-0.5.1-single-user-desktop.jpg">
			<img src="styles/images/pymt-0.5.1-single-user-desktop.mini.jpg" alt="PyMT single user desktop" class="floatimg"/>
		</a>
		<p>
			In the past we've focused on multi-user possibilities, but we wanted to show that PyMT is also perfectly capable of designing single-user applications.
			Therefore, we have added a very simple version of our desktop application for a single user.
			On this screenshot you can see that we have exactly the same applications available in both modes, using a flexible plugin architecture.
		</p>
		<p>
			When an application is open, you can go back to the main menu by touching a zone in a corner of the screen.
			Each application is launched in fullscreen.
		</p>
		<p>
			This desktop example consists of only 137 lines of Python code.
		</p>

		<h2>Bugfixes</h2>
		<p>
			Except probesysfs/mtdev support, all the other changes in this version are bugfixes and documentation fixes. Most importantly:
		</p>
		<ul>
			<li>Remove star imports in PyMT, except for our classes</li>
			<li>No more relative imports</li>
			<li>Fix error-on-copy from OpenGL (prevent non native data conversion)</li>
			<li>TextInput: The label is now only rendered within the bounds of the widget (no more overflow).</li>
			<li>Boxlayout: Padding and spacing are correctly calculated.</li>
		</ul>
	</div>
</div>
