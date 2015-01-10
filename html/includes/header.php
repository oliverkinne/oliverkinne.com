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
?>Please contact me for further information on how I can help your business.<?php
		break;
	default:
?>If you need help with your IT, websites, emails or related technologies, please feel free to contact me. I have over two decades' experience in IT and have successfully managed a large number of projects of varying sizes.<?php
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

	<script type="text/javascript" async src="/includes/web.js"></script>
<!--[if lt IE 9]><script type="text/javascript" async src="/includes/ie8.js"></script><![endif]-->

	<link rel="alternate" href="http://www.oliverkinne.com/" hreflang="en" />

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

	case "/":
?>
	<style>
article section p.image {
	float: left;
	width: 400px;
	height: 400px;
	padding: 0;
	position: relative;
	background-image: none;
}

@media only screen and (max-width: 520px) {
	article section p.image {
		width: 300px;
		height: 300px;
	}
}

@media only screen and (max-width: 440px) {
	article section p.image {
		width: 250px;
		height: 250px;
	}
}

article section p.image span {
	position: absolute;
	top: 0px;
	left: 0px;
	background-image: url('/img/Oliver-Kinne.jpg');
	background-size: cover;
	<!--[if lt IE 9]>
	/* background image resize fix for IE8 and before */
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/img/Oliver-Kinne.jpg', sizingMethod='scale');
	-ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/img/Oliver-Kinne.jpg', sizingMethod='scale')";
	<![endif]-->
}
#span1 {
	z-index: 10;
	display: none;
	background-image: url('/img/Oliver-Kinne1.jpg');
	<!--[if lt IE 9]>
	/* background image resize fix for IE8 and before */
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/img/Oliver-Kinne1.jpg', sizingMethod='scale');
	-ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/img/Oliver-Kinne1.jpg', sizingMethod='scale')";
	<![endif]-->
}
#span2 {
	z-index: 11;
	display: none;
	background-image: url('/img/Oliver-Kinne2.jpg');
	<!--[if lt IE 9]>
	/* background image resize fix for IE8 and before */
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/img/Oliver-Kinne2.jpg', sizingMethod='scale');
	-ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/img/Oliver-Kinne2.jpg', sizingMethod='scale')";
	<![endif]-->
}
#span3 {
	z-index: 12;
	display: none;
	background-image: url('/img/Oliver-Kinne3.jpg');
	<!--[if lt IE 9]>
	/* background image resize fix for IE8 and before */
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/img/Oliver-Kinne3.jpg', sizingMethod='scale');
	-ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/img/Oliver-Kinne3.jpg', sizingMethod='scale')";
	<![endif]-->
}
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
