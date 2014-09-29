<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php' ?>

	<article>
		<section>
			<h3 class="image" style="float: left; width: 400px; height: 400px; padding: 0; position: relative; background-image: none;"><span></span>Oliver Kinne</h3>

			<aside style="clear: none; float: left">
				<p>I have over two decades' experience in IT, covering software and web development, email marketing, CMS, CRM, cloud services, databases, servers, networking, security and many related technologies. I deliver high quality work and have successfully managed numerous projects of varying size for a number of clients.</p>
			</aside>

			<nav>
				<a class="skills" href="/skills/"><span></span>Skills</a><span class="divider"> | </span>
				<a class="projects" href="/projects/"><span></span>Projects</a><span class="divider"> | </span>
				<a class="resume" href="/cv/"><span></span>CV</a>
			</nav>

			<div class="clear">&nbsp;</div>
		</section>
	</article>

	<script>
var delay = 10000;
var fade = 3000;

$(document).ready(function() {
	$('article section h3.image span').after('<span id="span1"></span><span id="span2"></span><span id="span3"></span>');
	span();
});

function span() {
	$('article section h3.image span:first').delay(delay).fadeOut(fade, span1);
	$('#span1').delay(delay).fadeIn(fade);
}

function span1() {
	$('#span1').delay(delay).fadeOut(fade, span2);
	$('#span2').delay(delay).fadeIn(fade);
}

function span2() {
	$('#span2').delay(delay).fadeOut(fade, span3);
	$('#span3').delay(delay).fadeIn(fade);
}

function span3() {
	$('#span3').delay(delay).fadeOut(fade, span);
	$('article section h3.image span:first').delay(delay).fadeIn(fade);
}
	</script>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php' ?>
