<div id="gsoc2010" class="page">
	<h1>GSOC 2010</h1>
	<div class="page-content">
		<h2>Information</h2>
		<p>So you want to participate in GSoC2010 for PyMT? Great! Although we certainly value your interest, we have to stress a few requirements that are key to success. Please check the list below and make sure you qualify before you apply. If you are unsure about certain aspects, feel free to contact us (IRC or Mailing List) and we will work it out together. If you cannot repeatedly live up to these expectations, your project will likely be terminated. That means no T-Shirt! :-)</p>

		<p>More information about GSOC on :</p>
		<ul>
			<li>Our <a href="http://pymt.txzone.net/wiki/index.php/Devel/GSoc2010">PyMT GSOC 2010 wiki page</a></li>
			<li><a href="http://socghop.appspot.com/">GSoc Website</a></li>
		</ul>


		<!-- Original pasted from our wiki : http://pymt.txzone.net/wiki/index.php/Devel/GSoc2010 -->

		<h2>Project ideas</h2>
			<p>These are just ideas. If you come up with a cool idea on your own, perfect! Please keep in mind that you will be working on it for several months, so the project's difficulty and extent should take that into account. We <strong>will not</strong> accept applications that just copy&amp;paste the ideas below. You can use them as a starting point, but you need to be creative and come up with ideas on your own (need not be necessarily nobel prize worthy). In any case, we expect an <strong>elaborated</strong> text about <strong>your</strong> project idea, <strong>why</strong> you want to do that specific task, <strong>why</strong> you are the best person to do it and <strong>what you think why we should approve your project proposal</strong>.

		</p>

		<h3>User Interface projects</h3>
		<ul>
		<li><strong>More interaction</strong>: Research and implement widgets based on more than 2 touches and hands.<i>Question is: What can we do in terms of interaction with additional information such as orientation? Additionally, how should MTScatterWidget behave for more than 2 touches?</i></li>
		<li><strong>New keyboard</strong> adapted for MT. <i>Something like Swype + android pincode widget</i></li>
		<li><strong>OCR recognition</strong></li>
		<li><strong>MVC Model</strong> Rework our widgets to have a uniform interface. <i>(Checkbox, Input, Select, Carousel, Slider). We actually have some of them, but they don't have a common interface.</i></li>
		<li><strong>Better layout</strong> : E.g. Double tap moves the widget to the selected widget inside a drawn polygon. Then places it on a curve, randomizes its position, circles it, etc.</li>
		<li><strong>3D integration</strong> : we lack 3D. Find a good way to do it and integrate 3D into PyMT.</li>
		<li><strong>More widgets</strong> :  be creative, write cool new widgets!</li>
		<li><strong>Hand orientation aware widgets</strong>. <i>E.g., Keyboard could be splitted in half: One half for each hand, and the respective half follows the hand it belongs to and rotates with it automatically.</i></li>
		</ul>

		<h3>Core</h3>
		<ul>
		<li><strong>MT gesture recognition</strong> (More than 1 touch)</li>
		<li><strong>Network serialization</strong> : Be able to exchange widgets and their state between different PyMT processes (across the network). So you can e.g. throw a multi-touch ball at someone on a remote table.</li>
		<li><strong>QuickTime input provider</strong> : support Video &amp; Camera on OSX.</li>
		<li><strong>More input devices</strong> : native linux mt, wiimote.. ?</li>
		</ul>

		<h3>External tools</h3>

		<ul>
		<li><strong>Game</strong>: Implement a game (e.g. similar to Desperados) that makes use of 3D for object selection and rendering. E.g., imagine moving characters around on a map and hiding them from enemies. Your characters have a line of sight (calculate e.g. via framebuffer) and must not be seen. This task involves the addition of features to PyMT that are necessary for such a game. While much stuff already works, some things may be missing and it'd be your responsibility to add them.</li>
		<li><strong>Designer</strong>: Implement a full designer: A way to create and update XML description files for quick and sophisticated UI creation
		</li><li><strong>Debug suite</strong>. Multitouch is hard to debug, we need tools to save &amp; replay touches and ease the debugging process
		</li><li><strong>Optimize speed/docs/tests/usability</strong>
		</li></ul>


		<h3>Misc</h3>
		<ul>
		<li><strong>Calibration suite -</strong> This suite should perform semi-automatic calibration of the MT display. This is especially useful for DIY hardware. Think of the following calibration steps: DoubleTap speed calibration, Improved touch flow (retaintouch module), find &amp; ignore hotspots, Dejitter, ...</li>
		</ul>

</div>
</div>
