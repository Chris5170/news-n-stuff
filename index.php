<?php

session_start();
define('rootPath', '');
require_once('classes/models/newsmodel.php');
$newsM =  new NewsModel('https://www.jv.dk/rss/nyheder');
$newsMBT =  new NewsModel('https://www.berlingske.dk/content/rss');
$newsM->merge($newsMBT);
$date = array();
$articles = $newsM->getArticles();
function cmp($a, $b){
	// need to make date comparison !!!
	return strcmp($a->getDate(), $b->getDate());
}
usort($articles, "cmp");
foreach ($articles as $key => $article) {
	$date[$key] = $article->getDate();
}
array_multisort($date, SORT_DESC, $articles);
echo "<pre>";
print_r($articles);
echo "</pre>";
/*
$xml = simplexml_load_file('https://www.berlingske.dk/content/rss', 'SimpleXMLElement', LIBXML_NOCDATA);
foreach ($xml->channel->item as $item) {
	if(isset($item->title)){
		$arr['title'] = (string)$item->title;
		echo "<h2>" . (string)$item->title .  "</h2>";
	}
	if(isset($item->description)){
		$arr['description'] = (string)$item->description;
		echo "<p>" . (string)$item->description .  "</p>";
	}
	if(isset($item->link)){
		$arr['link'] = (string)$item->link;
		echo "<a href='" . (string)$item->link .  "''>link</a>";
	}
	if(isset($item->category)){
		$arr['category'] = (string)$item->category;
	}
	if(isset($item->pubDate)){
		$arr['pubDate'] = (string)$item->pubDate;
	}
	if(isset($item->pictureLink)){
		$arr['pictureLink'] = (string)$item->pictureLink;
		echo "<img src='" . (string)$item->pictureLink .  "''>";
	}
	if(isset($item->enclosure)){
		$arr['pictureLink'] = (string)$item->enclosure->attributes()['url'];
		echo "<img src='" . preg_replace('/\/image_(.*?)\//', '/image_x_large/', (string)$item->enclosure->attributes()['url']) .  "''>";
	}
	if(isset($item->photographer)){
		$arr['photographer'] = (string)$item->photographer;
	}
	$news[] = $arr;
*/
?>
<pre>
<?php //print_r($xml); ?>
</pre>