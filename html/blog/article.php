<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php' ?>
	<article>
		<section>
			<div class="addthis_sharing_toolbox"></div>
			<h1>Blog</h1>

			<aside>
				<h2><?php echo $headlines[$item]["title"] ?></h2>
				<p>(<?php echo date('d F Y' ,$headlines[$item]["published"]) ?>)</p>
				<?php echo $headlines[$item]["article"] ?><?php
	if (sizeof($headlines[$item]["labels"]) > 0) {
?>
				<p><strong>Keywords:</strong> <?php echo htmlentities($headlines[$item]["labels"]) ?></p><?php
	}
?>
			</aside>

			<aside class="side">
				<h3>All Blog Articles</h3><?php
for ($i = 0; $i < sizeof($headlines); $i++) {
?>
			<p><?php
	if ($i == $item) {
?><strong><?php
	}
	else {
?><a href="/blog/<?php echo $headlines[$i]["link2"] ?>"><?php
	}
	echo htmlentities($headlines[$i]["title"]);
	if ($i == $item) {
?></strong><?php
	}
	else {
?></a><?php
	}
?> (<?php echo date('d M Y' ,$headlines[$i]["published"]) ?>)</p><?php
}
?>
			</aside>

			<div class="clear">&nbsp;</div>
		</section>
	</article>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php' ?>