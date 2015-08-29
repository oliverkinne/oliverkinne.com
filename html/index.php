<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php' ?>

	<article>
		<section>
			<p class="image"><span></span>Welcome</p>

			<aside style="clear: none; float: left">
				<div class="addthis_sharing_toolbox homepage"></div>
				<p>I have over two decades' experience in IT and have successfully managed numerous projects of varying size for a number of clients.</p>
				<p>I can help with all things IT - no project is too small. Feel free to <a href="/contact/">contact me</a> for a free initial consultation.</p>
				<h2>From the Blog</h2><?php
	include $_SERVER['DOCUMENT_ROOT'] . '/cron/blog_feed.php';

	echo substr($headlines[0]["article"], 0, strpos($headlines[0]["article"], "</p>")) . ' <a href="/blog/">Read More...</a></p>';
?>
			</aside>

			<nav>
				<a class="skills" href="/blog/"><span></span>Blog</a><span class="divider"> | </span>
				<a class="projects" href="/projects/"><span></span>Projects</a><span class="divider"> | </span>
				<a class="resume" href="/cv/"><span></span>CV</a>
			</nav>

			<div class="clear">&nbsp;</div>
		</section>
	</article>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php' ?>