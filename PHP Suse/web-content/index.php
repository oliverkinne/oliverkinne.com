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
				<p>Throughout my career I have enjoyed helping my employer to improve efficiency, increase productivity and develop new business opportunities.</p>
				<p>As an experienced developer, I expanded my current employer's only and static website, into five dynamic, database-driven, search engine optimized and high performing sites, multiplying the opportunities of revenue for the business.</p>
				<p>Applying my networking knowledge I streamlined the IT infrastructure of originally one office and one server, and expanded it into three offices in two time zones, supporting around 50 staff, five servers and a virtual web server.</p>
				<p>I appointed and supervised external providers and implemented cloud based services to increase the efficiency and productivity of the company's teams.</p>
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