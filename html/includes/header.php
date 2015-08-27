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

	<style>
/* reset =================================================== */
* { margin: 0; padding: 0; }
html { overflow-y: scroll; background-color: #fff; }
body { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 62.5%; }
a, p, h1, h2, h3, h4, h5, h6, input, select, th, td, li { font-size: 1em; line-height: 1.2em; font-weight: normal; color: #606060; }
ol, ul { margin: 0; padding: 0; }
ol { list-style: decimal; }
ul { list-style: none; }
ol li { margin: 0 0 0 30px; padding: 0 0 0 5px; }
ul li { margin: 0 0 0 15px; padding: 0 0 0 5px; }
ol li ul li { padding-left: 11px; text-indent: -11px; }
ul li:before { content: "• "; color: #606060; font-size: 1.3em; display: inline-block; width: 10px; }
a, img { outline: none; border: none; }
img { display: inline-block; }
article, aside, details, footer, header, nav, section { display: block; }

/* global styles ========================================================= */
.hidden { display: none; }
a:hover, p.h1 a, p.h2 a, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a, nav a, footer section a, a.tel { text-decoration: none; }
p.h1 a:hover, p.h2 a:hover, h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover { border-bottom: 1px solid #606060; }
nav a:hover, footer section a:hover { border-bottom: 1px solid #eae5e5; color: #eae5e5; }
a.tel:hover, p.social a:hover { border: none; }
footer a.tel:hover, p.social a:hover { color: #fff; }
a.tel:hover { cursor: text; }
a:hover img { opacity: 0.6; filter: alpha(opacity=60); }
nav a, span.selected { text-transform: uppercase; }
span.selected { color: #bababa; }

img.middle { vertical-align: text-bottom; }

.divider { display: inline-block; overflow: hidden; }

.clear { clear: both; width: 0; height: 0; overflow: hidden; }

/* non displaying text =================================================== */
article section p.image, footer section p .button, footer section p.social a, .divider, .clear { font-size: 0; line-height: 0; text-indent: -10000px; }
article section p.image, article section nav a, footer section p .button, footer section p.social a { position: relative; }
article section p.image span, article section nav a span, footer section p .button span, footer section p.social a span { background-position: 0 0; position: absolute; top: 0; left: 0; width: 100%; height: 100%; }

/* center site ============================================= */
header, article, footer, .advert { width: 100%; clear: both; }
section { margin: 0 auto 0 auto; width: 880px; }

/* header ================================================== */
header { border-top: 14px solid #606060; padding-top: 37px; }
header section div { float: left; margin: 0 80px 36px 60px; width: 300px; }
header section div h1 a, p.h1 a { font-size: 3.9em; font-weight: bold; }
header section div h2 a, p.h2 a { font-size: 1.5em; }

/* navigation ============================================== */
header section nav { float: left; padding-top: 48px; width: 433px; font-size: 1.2em; }
header section nav .divider { width: 40px; color: #fff; }

/* body ===================================================== */
article, .advert { padding: 58px 0; background-color: #eae5e5; }
.advert { border-bottom: 5px solid #fff; }

article section .addthis_sharing_toolbox { float: right; margin-right: 80px; height: 15px; }
article section .addthis_sharing_toolbox.homepage { float: none; margin-bottom: 20px; }

article section h1 { font-size: 2.5em; font-weight: bold; padding: 0 0 41px 54px; margin: 22px 0 12px 0; }
article section h2 { margin: 16px 0 12px 0; font-size: 1.4em; }
article section h2, article section h2 a, article section h3, article section h3 a, article section h4, article section h4 a { font-weight: bold; }
article section h3 { background: url('/img/bullets.png') top left no-repeat; padding-left: 26px; min-height: 16px; font-size: 1.3em; margin: 16px 0 12px 0; }
article section h4, article section h4 a { font-size: 1.1em; color: #808080; }

article section aside { clear: left; float: left; padding-left: 66px; width: 400px; }
article section aside.wide { width: 800px; }
article section aside.side { clear: none; width: 334px; }
article section aside p, article section aside ol { margin-bottom: 14px; }
article section aside p, article section aside li { font-size: 1.2em; line-height: 1.5em; }
article section aside p.dates { margin-bottom: 0px; color: #808080; }
article section aside p.dates, article section aside p.team { font-size: 1.2em; }

article section aside div.scroll { height: 163px; overflow: auto; overflow-x: hidden; overflow-y: auto; padding-right: 10px; }

<?php
switch ($mainPath) {
	case "/":
?>
/* homepage ======================================= */
article section p.image { float: left; width: 400px; height: 400px; padding: 0; position: relative; background-image: none; }

article section p.image span { position: absolute; top: 0px; left: 0px; background-image: url('/img/Oliver-Kinne.jpg'); background-size: cover; <!--[if lt IE 9]>filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/img/Oliver-Kinne.jpg', sizingMethod='scale'); -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/img/Oliver-Kinne.jpg', sizingMethod='scale')"; <![endif]--> }
#span1 { z-index: 10; display: none; background-image: url('/img/Oliver-Kinne1.jpg'); <!--[if lt IE 9]>filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/img/Oliver-Kinne1.jpg', sizingMethod='scale'); -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/img/Oliver-Kinne1.jpg', sizingMethod='scale')";<![endif]--> }
#span2 { z-index: 11; display: none; background-image: url('/img/Oliver-Kinne2.jpg'); <!--[if lt IE 9]>filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/img/Oliver-Kinne2.jpg', sizingMethod='scale'); -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/img/Oliver-Kinne2.jpg', sizingMethod='scale')";<![endif]--> }
#span3 { z-index: 12; display: none; background-image: url('/img/Oliver-Kinne3.jpg'); <!--[if lt IE 9]>filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/img/Oliver-Kinne3.jpg', sizingMethod='scale'); -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/img/Oliver-Kinne3.jpg', sizingMethod='scale')";<![endif]--> }

article section nav { clear: none; float: left; padding: 46px 0 0 33px; }
article section .divider { width: 10px; color: #eae5e5; }
article section nav a { display: inline-block; width: 132px; height: 72px; font-size: 1.2em; text-align: center; padding-top: 60px; vertical-align: top; }
article section nav a:hover { border: none; -webkit-transition: color .25s linear; transition: color .25s linear; transition: background-color .25s linear; }
article section nav a.skills { background-color: #ff0; }
article section nav a.skills:hover { background-color: #a25c28; }
article section nav a.projects { background-color: #3fe534; }
article section nav a.projects:hover { background-color: #3d8738; }
article section nav a.resume { background-color: #73a6fb; }
article section nav a.resume:hover { background-color: #3a5a8e; }
article section nav a { -moz-border-radius: 66px; border-radius: 66px; }
article section nav a span { <!--[if lt IE 9]>filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/img/circle.png', sizingMethod='scale'); -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/img/circle.png', sizingMethod='scale')";<![endif]--> }

<?php
		break;

	case "/blog/":
?>	
article section h3 { background-position: 0 -16px; }
ul li:before { color: #ff0; }
<?php
		break;

	case "/projects/":
?>	
article section h3 { background-position: 0 -32px; }
ul li:before { color: #3fe534; }
<?php
		break;

	case "/cv/":
?>	
ul li:before { color: #73a6fb; }
<?php
		break;
}
?>

/* advert =================================================== */
.advert div { text-align: center; padding: 0 40px; overflow: hidden; }
.oliverkinnecom-responsive { width: 150px; height: 150px; }

/* footer =================================================== */
footer { padding: 53px 0 36px 0; background-color: #606060; border-bottom: 30px solid #404040; }
footer section div { margin-left: 50px; }
footer section p { font-size: 1.2em; float: left; width: 207px; padding-right: 47px; }
footer section p, footer section p a { color: #fff; }

footer section p .button { display: block; float: left; width: 45px; height: 45px; margin: -8px 18px 0 0; }
footer section p .button.tel span { background: url('/img/phone.png'); }
footer section p .button.email span { background: url('/img/email.png'); }
footer section p .button.social span { background: url('/img/social.png'); }

footer section p.social { width: 177px; }
footer section p.social a { display: block; float: left; width: 16px; height: 16px; margin: 3px 6px 0 0; }
footer section p.social a:hover { opacity: 0.6; filter: alpha(opacity=60); }
footer section .github span { background: url('/img/github.png'); }
footer section .spiceworks span { background: url('/img/spiceworks.png'); }
footer section .linkedin span { background: url('/img/linkedin.png'); }

footer section p.ipv6 { width: 45px; padding-right: 0; margin-top: -7px; }
footer section p.ipv6 a:hover { border: none; }

/* media queries =================================================== */
@media only screen and (max-width: 905px) {
	section { width: 450px; }

	/* header ================================================== */
	header section div { margin: 0; }

	/* navigation ============================================== */
	header section nav { padding: 32px 0 27px 0; }

	/* body ===================================================== */
	article section h1 { padding-left: 0; }
	article section h1.image { width: 112px; height: 112px; }
	article section h2, article section h3, article section h4 { margin-top: 0; }

	article section aside, article section aside.home { padding: 14px 0 0 12px; float: none; clear: left; }
	article section aside.wide, article section aside.side { width: 400px; }

	/* footer =================================================== */
	footer section div { margin-left: 0; }
	footer section p { height: 62px; }
	footer section p.tel, footer section p.social { width: 215px; padding-right: 22px; }
	footer section p.email { width: 207px; padding-right: 0; }
}

@media only screen and (max-width: 520px) {
	section { width: 300px; }

	/* navigation ============================================== */
	header section nav { width: 300px; font-size: 1.1em; }
	header section nav .divider { width: 11px; }

	/* body ===================================================== */
	article section h1.image { width: 72px; height: 72px; }

	article section aside { padding-top: 18px; }
	article section aside, article section aside.wide, article section aside.side { width: 280px; }

	/* footer =================================================== */
	footer section p.tel, footer section p.social, footer section p.email { width: 207px; padding-right: 0; }
	footer section p.ipv6 { width: 50px; }
}

@media only screen and (max-width: 905px) {
	article section nav { padding: 0 0 0 49px; }
	article section .divider { width: 7px; }
	article section nav a { font-size: 1.1em; width: 55px; height: 53px; padding: 40px 20px 0 18px; }
}

@media only screen and (max-width: 520px) {
	article section .addthis_sharing_toolbox { margin-right: 0; width: 20%; }
	article section .addthis_sharing_toolbox.homepage { width: 100%; }

	article section p.image { width: 300px; height: 300px; }
	article section nav { padding-left: 49px; height: 63px; }
	article section .divider { width: 5px; }
	article section nav a { font-size: 0.9em; width: 51px; height: 37px; padding: 26px 6px 0 6px; }
}

@media only screen and (max-width: 440px) {
	article section p.image { margin-left: 20px; width: 250px; height: 250px; }
}

/* media queries for advert ============================ */
@media(min-width: 400px) {
	.oliverkinnecom-responsive, span.adslot a { width: 300px; height: 250px; }
	span.adslot img { display: none; }
	span.adslot a { display: inline-block; background-image: url("https://www.statuscake.com/App/Banners/300x250.png"); }
}

@media(min-width: 540px) {
	.oliverkinnecom-responsive, span.adslot a { width: 468px; height: 60px; }
	span.adslot a { background-image: url("https://www.statuscake.com/App/Banners/468x60.png"); }
}

@media(min-width: 800px) {
	.oliverkinnecom-responsive, span.adslot a { width: 728px; height: 90px; }
	span.adslot a { background-image: url("https://www.statuscake.com/App/Banners/728x90.png"); }
}

@media print {
	header section nav, .advert { display: none; }
	header, footer { border-top: 1px solid #000; }
	article, footer { background-color: #fff; }
	footer { border-bottom: 0; }
	footer section p, footer section p a { color: #000; }
	footer section .github span, footer section .spiceworks span, footer section .linkedin span { filter: invert(100%); -webkit-filter: invert(100%); }
}
	</style>
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