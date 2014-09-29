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
switch ($path) {
	case "/skills/":
?>skills, devops, management, cloud services, cloud, virtualisation, content management systems, wikis, documentation, website development, HTML, databases, SQL, software, development, developer, source, code, coding<?php
		break;
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
switch ($path) {
	case "/skills/":
?>I have over two decades' experience in IT, covering software and web development, email marketing, CMS, CRM, cloud services, databases, servers, networking, security and many related technologies. I deliver high quality work and have successfully managed numerous projects of varying size for a number of clients.<?php
		break;
	case "/projects/":
?>I have successfully managed a large number of projects of varying sizes in terms of budget, size of team and duration. I also have recently achieved AgilePM Foundation certification.<?php
		break;
	case "/cv/":
?>During my long career in IT, I have supported multiple offices in different time zones, with several dozen staff, including home workers. I have also administered, maintained and consolidated multiple, business critical servers.<?php
		break;
	case "/contact/":
?>Please contact me for further information.<?php
		break;
	default:
?>Oliver Kinne - Web Development / IT Consultancy<?php
		break;
}
?>" />

	<title><?php
switch ($path) {
	case "/skills/":
?>Skills - <?php
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

<?php
if ($server == 'oliverkinne') {
?>
	<style><?php
	include $_SERVER["DOCUMENT_ROOT"] . '/includes/web.css';
?>
	</style><?php
}
else {
?>
	<link rel="stylesheet" type="text/css" href="/includes/web.css" /><?php
}
?>

<?php
switch ($path) {
	case "/skills/":
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
