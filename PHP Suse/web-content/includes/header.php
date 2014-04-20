<?php
$server = $_SERVER['SERVER_NAME'];
$pageURL = $_SERVER['REQUEST_URI'];
$page = preg_replace('/^(index|default|home|welcome)\.(php|html|htm|asp|aspx)$/i', '', preg_replace('/^.*\//', '', $pageURL));
$path = preg_replace('/\/[^\/]*$/', '/', $pageURL);
$mainPath = preg_replace('/^(\/[^\/]*\/).*$/', '$1', $path);

if ($server != 'me.oliverkinne.com' && $server != 'www.oliverkinne.com') {
	header('Location: http://www.oliverkinne.com'.$path.$page, true, 301);
	die();
}
?><!doctype html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<meta name="keywords" content="Oliver Kinne, websites, domain names, networking, cloud services, hardware, software, virtualisation, IT consultancy, support" />
	<meta name="description" content="Oliver Kinne - Web Development / IT Consultancy" />

	<title>Oliver Kinne - Web Development / IT Consultancy</title>  

	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="initial-scale=1.0">

	<link rel="apple-touch-icon-precomposed" href="/apple-touch-icon.png" />
	<link rel="shortcut icon" href="/favicon.ico" />

	<link rel="stylesheet" type="text/css" href="/includes/web.css" />
<?php
switch ($path) {
	case "/skills/":
?>	
	<style>
article section h5 { background-position: 0 -16px; }
ul li:before { color: #ff0; }
	</style>
<?php
		break;

	case "/projects/":
?>	
	<style>
article section h5 { background-position: 0 -32px; }
ul li:before { color: #3fe534; }
	</style>
<?php
		break;

	case "/resume/":
?>	
	<style>
ul li:before { color: #73a6fb; }
	</style>
<?php
		break;
}
?>

	<script type="text/javascript" src="/includes/web.js"></script>
<!--[if lt IE 9]><script type="text/javascript" src="/includes/ie8.js"></script><![endif]-->
</head>

<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-27458462-3', 'oliverkinne.com');
  ga('send', 'pageview');
</script>
	<header>
		<section>
			<div>
				<h1><a href="/">Oliver Kinne</a></h1>
				<h2><a href="/">Web Development / IT Consultancy</a></h2>
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
if ($path.$page == '/skills/') {
?>
				<span class="selected">Skills</span><?php
}
else {
?>
				<a href="/skills/">Skills</a><?php
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
