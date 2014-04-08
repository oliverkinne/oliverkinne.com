<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php' ?>

	<article>
		<section>
			<h3 class="image"><span></span>Oliver Kinne</h3>

			<aside style="clear: none; float: left">
				<p>Do you need help updating your website or building a new one, handling your email marketing or finding a powerful, cost-effictive emailing tool, updating your promotional materials or revitalizing your brand?</p>
				<p>I can help.</p>
				<p>I can also help if you want advice on setting up your first office, finding a cost-effective email solution, improving your existing IT systems, moving to cloud services, tuning your databases or updating your networking infrastructure.</p>
				<p>I deliver high quality work and have over two decades' experience in IT. I have successfully managed numerous projects of varying size for a number of clients and have good working relationships with designers, copywriters, photographers and print production experts.</p>
				<p>I am happy to project management everything for you, or take on those tasks that you want help with.</p>
				<p>No job is too small or too large.</p>
				<p><strong>Contact me now for more information:<br>
					M: 07773 278 142<br>
					E: <a href="mailto:me@oliverkinne.com">me@oliverkinne.com</a></strong></p>
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
