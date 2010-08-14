<div id="gsoc2010" class="page">
	<h1>GSOC 2010</h1>
	<div class="page-content">
		<h2>Information</h2>
		<p>So you want to participate in GSoC2010 for PyMT? Great! Although we certainly value your interest, we have to stress a few requirements that are key to success. Please check the list below and make sure you qualify before you apply. If you are unsure about certain aspects, feel free to contact us (IRC or Mailing List) and we will work it out together. If you cannot repeatedly live up to these expectations, your project will likely be terminated. That means no T-Shirt! :-)</p>

		<p>More information about GSOC on :</p>
		<ul>
			<li>Our <a href="http://pymt.eu/wiki/index.php/Devel/GSoc2010">PyMT GSOC 2010 wiki page</a>, specially about Student Infos and Requirements</li>
			<li><a href="http://socghop.appspot.com/">GSoc Website</a></li>
		</ul>


		<!-- Original pasted from our wiki : http://pymt.eu/wiki/index.php/Devel/GSoc2010 -->

		<h2>Project ideas</h2>
<h3>User Interface Projects</h3>
<p><strong>More interactions/Widgets</strong>
Research and implement widgets based on more than 2 touches and hands.  The question to answer is: What can we do in terms of interaction with additional information such as orientation? Implementing cool interactions as widgets or other PyMT features so that they are reusable or extensible is what we are looking for.  
</p>
<p class="vspace">Examples:  
</p><ul><li>Intuitive 3D interactions for moving objects like navigating a 3D space, rotating, sizing etc.  
</li><li>Intuitive interactions for selecting, arranging objects on a tabletop.
</li><li>Implement intuitive multitouch menus that take into consideration challenges like display orientation, multiuser, touch input etc.)
</li></ul><p class="vspace"><strong>Enhanced text Input</strong>
We have keyboard and virtual keyboards. Other text entry methods could be fun to explore see e.g. <a class="urllink" href="http://www.swypeinc.com/" rel="nofollow">http://www.swypeinc.com/</a>
</p>
<p class="vspace"><strong>Enhanced input interactions</strong>
Interactions that take into conideration more than just touch input.   New technologies allow e.g. for hand tracking, to know hand orientation, etc.  Develop widgets that take advantage of this new input data.  (Example:Keyboard could be splitted in half: One half for each hand, and the respective half follows the hand it belongs to and rotates with it automatically.)
</p>
<div class="vspace"></div><h3>Core</h3>

<p><strong>Improve PyMT graphics utilities</strong>
Improve the utility drawing functions in pymt.  These functions are meant to wrap OpenGL calls so user s dont have to know OpenGL (e.g. drawCircle, drawLine, drawTexturedRectangle etc.).  There is currently no functionality to draw curves (bezier or other) and the API in general could be made more usable. One could implement processing syntax/function (see e.g. pyprocessing) for nicer drawing API.  
</p>
<p class="vspace"><strong>Gesture Framework</strong>
Create new or enhance existing gesture framework.  Specifically, specifying, recording, and recognizing multi finger gestures.  Design and implement the gesture API to work nicely with other multi-touch programming paradigms or maybe even come up with new ones (research paper opportunity?!). Some challenges to think about:  How are regular touch events reported while a gesture is being performed, how to check if a gesture is being performed/in progress (maybe state machine based). 
</p>
<p class="vspace"><strong>More Input providers</strong>
Implementing native input providers for specific input devices.  We have already: TUIO, mouse, Windows 7 multitouch (WM_TOUCH), windows pen.  Multi pointer X would be nice for Linux, maybe wiimote support nicely integrated to pymt. (One input provider probably isn't worth a whole summer project, but one could do a couple or expand on the idea otherwise)
</p>
<p class="vspace"><strong>Improve Video &amp; Camera support</strong>
PyMT's core is very modular, so we can use different backends and you can implement new providers for things liek video support, images, etc.  We could really use e.g. a Quicktime Video provider or better webcam support cross platform (especially osx is kind of a pain right now with gstreamer)

</p>
<p class="vspace"><strong>Network serialization</strong>
Be able to exchange widgets and their state between different PyMT processes (across the network). So you can e.g. throw a multi-touch ball at someone on a remote table.  Some work on this has been done, and we could help at the very least with conceptually how to do this.
</p>
<div class="vspace"></div><h3>Extensions</h3>
<p><strong>Cross platform, no hassel PDF (or other widely used filetype) support</strong>
We'd really like to be able to integrate e.g. PDF documents easily, the state of doing this is not very good in terms of cross platform support without having to install or compiel all kinds of stuff.
</p>
<p class="vspace"><strong>Webkit extension</strong>
This actually kind of works and has been implemented.  Would be nice if someone could take it and integrate it nicely into the core so that it just works (requires both C and python knowledge)
</p>
<div class="vspace"></div><h3>Standalone Applications</h3>

<p><strong>PyMT IDE</strong>
Build a PyMT Integrated Development Environment or GUI builder using PyMT itself.  We've played with this idea, and might be able to help significantly if we get a  good start or exciting proposals.  We also have had some fun ideas like live coding, being able to change the UI at any time by switching to IDE mode etc.  Python is very flexible in terms of loading code at runtime etc. so many things would be possible
</p>
<p class="vspace"><strong>A game or really cool application idea</strong>
Come up with a really fun game or useful application that uses multitouch input in new or interesting ways.  Let your imagination run wild, and show the world what PyMT is capable off.
</p>
<div class="vspace"></div><h3>Other</h3>
<p><strong>Debuggin Tools</strong>
Multi touch can be really hard to debug (mouse simulating multi touch helps, but only gets you so far).  A good project would come up with useful debugging concept for debugging multitouch development and implement them so they can be used with pymt (e.g. pymt modules, or debugging support built into the core).
</p>
<p class="vspace"><strong>Calibration suite</strong> 
Implement semi-automatic calibration of  multitouch displays. This is especially useful for DIY hardware. Think of the following calibration steps: DoubleTap speed calibration, Improved touch flow (e.g. see retaintouch module), find &amp; ignore hotspots, Dejitter, implement coordinate transformations if the tracker isn't properly calibrated we can do it inside pymt. 

</p>
<p class="vspace"><strong>Documentation or Example Apps</strong>
Writing good documentation and example apps or tutorials is hard, but really helpful to new people checking out a library.  A summer project would involve multiple smaller parts of writing example applications, documentation, and tutorials.  Great way to learn about PyMT if no prior experience is present.
</p>




</div>
</div>
