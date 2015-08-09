<?php
$server = $_SERVER['SERVER_NAME'];
$pageURL = $_SERVER['REQUEST_URI'];
$page = preg_replace('/^(index|default|home|welcome)\.(php|html|htm|asp|aspx)$/i', '', preg_replace('/^.*\//', '', $pageURL));
$path = preg_replace('/\/[^\/]*$/', '/', $pageURL);
$mainPath = preg_replace('/^(\/[^\/]*\/).*$/', '$1', $path);

if ($server != 'me.oliverkinne.com' && $server != 'www.oliverkinne.com' && $server != 'oliverkinne') {
	header('Location: http://www.oliverkinne.com' . $path . $page, true, 301);
	die();
}
?><!doctype html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<meta name="keywords" content="<?php
switch ($mainPath) {
	case "/blog/":
		$headlines = load_blog_feed();

		// show latest article by default
		$item = 0;

		// find selected article
		$id = $_GET["id"] . '';
		for ($i = 0; $i < sizeof($headlines); $i++) {
			if ($headlines[$i]["link2"] == $id) {
				$item = $i;
				break;
			}
		}

		echo $headlines[$item]["labels"];

		break;
?><?php
	case "/projects/":
?>projects, work, Webistrano, Capistrano, deployment, monitoring, Zenoss, server support, operations, infrastructure, migration, contact relationship management, website, homepage, bespoke, database<?php
		break;
	case "/cv/":
?>experience, work, curriculum viatae, CV, skills, TUI, PLASA, self-employed, employed, fulltime<?php
		break;
	case "/contact/":
?>call, speak, advice, contact, phone, mobile, cellphone, telephone, email, GitHub, Spiceworks, LinkedIn<?php
		break;
	default:
?>Oliver Kinne, websites, domain names, networking, cloud services, hardware, software, virtualisation, IT consultancy, support<?php
		break;
}
?>" />
	<meta name="description" content="<?php
switch ($mainPath) {
	case "/blog/":
		echo preg_replace('/ [^ ]*$/i', '...', substr(str_replace('</p>', ' ', str_replace('<p>', '', $headlines[$item]["article"])), 0, 200));

		break;
	case "/projects/":
?>I have successfully managed a large number of projects of varying sizes in terms of budget, size of team and duration. I also have recently achieved AgilePM Foundation certification.<?php
		break;
	case "/cv/":
?>During my long career in IT, I have supported multiple offices in different time zones, with several dozen staff, including home workers. I have also administered, maintained and consolidated multiple, business critical servers.<?php
		break;
	case "/contact/":
?>Please contact me for further information on how I can help your business.<?php
		break;
	default:
?>If you need help with your IT, websites, emails or related technologies, please feel free to contact me. I have over two decades' experience in IT and have successfully managed a large number of projects of varying sizes.<?php
		break;
}
?>" />

	<title><?php
switch ($mainPath) {
	case "/blog/":
?>Blog - <?php
		echo $headlines[$item]["title"];
?> - <?php
		break;
	case "/projects/":
?>Projects - <?php
		break;
	case "/cv/":
?>CV - <?php
		break;
	case "/contact/":
?>Contact - <?php
		break;
}
?>Oliver Kinne - Web Development / IT Consultancy</title>  

	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="initial-scale=1.0">

	<link rel="apple-touch-icon-precomposed" href="/apple-touch-icon.png" />
	<link rel="shortcut icon" href="/favicon.ico" />

	<link rel="alternate" href="http://www.oliverkinne.com<?php echo $path . $page ?>" hreflang="en" />

<?php
if ($server == "oliverkinne") {
?>
	<style><?php
	include $_SERVER['DOCUMENT_ROOT'] . '/includes/web.css';
?></style><?php
}
else {
?>
	<link rel="stylesheet" type="text/css" href="/includes/web.css" /><?php
}

switch ($mainPath) {
	case "/blog/":
?>	
	<style>
article section h3 { background-position: 0 -16px; }
ul li:before { color: #ff0; }
	</style>
<?php
		break;

	case "/projects/":
?>	
	<style>
article section h3 { background-position: 0 -32px; }
ul li:before { color: #3fe534; }
	</style>
<?php
		break;

	case "/cv/":
?>	
	<style>
ul li:before { color: #73a6fb; }
	</style>
<?php
		break;
}
?>
</head>

<body>
	<header>
		<section>
			<div>
<?php
if ($path.$page == '/') {
?>
				<h1><a href="/">Oliver Kinne</a></h1>
				<h2><a href="/">Web Development / IT Consultancy</a></h2><?php
}
else {
?>
				<p class="h1"><a href="/">Oliver Kinne</a></p>
				<p class="h2"><a href="/">Web Development / IT Consultancy</a></p><?php
}
?>
			</div>

			<nav>
<?php
if ($path.$page == '/') {
?>
				<span class="selected">Home</span><?php
}
else {
?>
				<a href="/">Home</a><?php
}
?><span class="divider"> | </span>
<?php
if ($path.$page == '/blog/') {
?>
				<span class="selected">Blog</span><?php
}
else {
?>
				<a href="/blog/">Blog</a><?php
}
?><span class="divider"> | </span>
<?php
if ($path.$page == '/projects/') {
?>
				<span class="selected">Projects</span><?php
}
else {
?>
				<a href="/projects/">Projects</a><?php
}
?><span class="divider"> | </span>
<?php
if ($path.$page == '/cv/') {
?>
				<span class="selected">CV</span><?php
}
else {
?>
				<a href="/cv/">CV</a><?php
}
?><span class="divider"> | </span>
<?php
if ($path.$page == '/contact/') {
?>
				<span class="selected">Contact</span><?php
}
else {
?>
				<a href="/contact/">Contact</a><?php
}
?>
			</nav>
		</section>
	</header>
<?php

function load_blog_feed() {
	$feed = simplexml_load_string(file_get_contents('http://oliverkinne.blogspot.com/feeds/posts/default'));
	//var_dump($feed);

	for ($item = 0; $item < $feed->entry->count(); $item++) {
		$article = $feed->entry[$item]->content;

		// fix Blogger tagging
		$article = preg_replace('/<p><\/p>\n|<p><\/p>$/i', '', preg_replace('/<p>(<(h[1234]|ol|ul|td|table)[^>]*>)/i', '${1}', preg_replace('/(<\/(h[1234]|ol|ul|td|table)>)<\/p>/i', '${1}', preg_replace('/\x0A/', "</p>\n<p>", preg_replace('/\x0D/', '', '<p>' . preg_replace('/<\/?(div|p)[^>]*>/i', '', preg_replace('/(<(h[1234]|p|ol|ul|td|table)[^>]*>)/i', "\n" . '${1}', preg_replace('/(<\/(h[1234]|p|ol|ul|td|table)[^>]*>)/i', '${1}' . "\n", preg_replace('/<br *\/?>/i', "\n", preg_replace('/[\x0A\x0D]*/', '', $article))))) . '</p>')))));

		// fix relative links
		$article = preg_replace('/(href=\")https?:\/\/([^.]*\/\")/i', '${1}/${2}', $article);

		$labels = '';
		for ($label = 0; $label < $feed->entry[$item]->category->count(); $label++) {
			$labels = $labels . ', ' . $feed->entry[$item]->category[$label]->attributes()->term;
		}
		$labels = preg_replace('/^, /i', '', $labels);
		//var_dump($labels);

		$headlines[$item] = array("published" => strtotime($feed->entry[$item]->published), "title" => $feed->entry[$item]->title, "link" => $feed->entry[$item]->link[0]->attributes()->href, "link2" => preg_replace('/^https?:\/\/[^.]*\.blog[^.]*\.com\/([^.]*)(\.html)?$/i', '$1', $feed->entry[$item]->link[2]->attributes()->href), "article" => $article, "labels" => $labels);
	}

	usort($headlines, 'mySort');
	function mySort($a, $b) {
		return $b["published"] - $a["published"];
	}

	return $headlines;
}