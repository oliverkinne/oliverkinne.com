<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php' ?>

	<article>
		<section>
			<h3 class="image"><span></span>Oliver Kinne</h3>

			<nav>
				<a class="resume" href="/cv/"><span></span>CV</a><span class="divider"> | </span>
				<a class="skills" href="/skills/"><span></span>Skills</a><span class="divider"> | </span>
				<a class="projects" href="/projects/"><span></span>Projects</a>
			</nav>

			<aside class="home">
				<p>I have over two decades' experience in IT, covering software and web development, email marketing, CMS, CRM, cloud services, databases, servers, networking, security and many related technologies. I deliver high quality work and have successfully managed numerous projects of varying size for a number of clients.</p>
				<p>I am happy to work on an employed basis, so if you need a highly self-motivated member of staff with a positive attitude to work in your team, or if you want to create a new team and need someone with the necessary IT skills and experience who can manage a group of like-minded people, I would relish the opportunity of an interview.</p>
				<p>I am also happy to work on a freelance basis and have good working relationships with designers, copywriters, photographers and print production experts. I can help you re-design your website or create a brand new web presence, update your promotional materials or revitalize your brand. If you would like advice on setting up your first office, improving your existing IT systems, moving to cloud services, tuning your databases or updating your networking infrastructure, I can also help.</p>
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
