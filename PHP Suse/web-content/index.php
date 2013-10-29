<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php' ?>

	<article>
		<section>
			<h3 class="image"><span></span>Oliver Kinne</h3>

			<nav>
				<a class="skills" href="/skills/"><span></span>My Skills</a><span class="divider"> | </span>
				<a class="resume" href="/resume/"><span></span>My Resume</a><span class="divider"> | </span>
				<a class="projects" href="/projects/"><span></span>My Projects</a>
			</nav>

			<aside class="home">
				<p>I am a developer at heart and relish exploring new technologies and learn new skills, applying them to business processes to improve efficiency and increase productivity.</p>
				<p>I am self-motivated and good at translating colleagues' requirements into technological solutions or new business opportunities.</p>
				<p>I love working in a team of like-minded colleagues, but can also work independently.</p>
				<p>I have many years' experience of software and web development, with a thorough understanding of databases, servers, networking and related technologies.</p>
			</aside>

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