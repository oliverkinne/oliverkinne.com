<?php
// get Blogger feed
$feed = file_get_contents('http://oliverkinne.blogspot.com/feeds/posts/default');

if ($feed !== false) {
	$feed = simplexml_load_string($feed);

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

		$headlines[$item] = array("published" => strtotime($feed->entry[$item]->published), "title" => (string)$feed->entry[$item]->title, "link" => (string)$feed->entry[$item]->link[0]->attributes()->href, "link2" => preg_replace('/^https?:\/\/[^.]*\.blog[^.]*\.com\/([^.]*)(\.html)?$/i', '$1', $feed->entry[$item]->link[2]->attributes()->href), "article" => $article, "labels" => $labels);
	}

	usort($headlines, 'mySort');

	file_put_contents('blog_feed.php', "<" . "?php\n\$headlines = " . var_export($headlines, true) . ";\n?" . ">");
}

function mySort($a, $b) {
	return $b["published"] - $a["published"];
}
?>