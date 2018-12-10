<?php
$xml = simplexml_load_file('https://www.jv.dk/rss/nyheder', 'SimpleXMLElement', LIBXML_NOCDATA);
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
	if(isset($item->photographer)){
		$arr['photographer'] = (string)$item->photographer;
	}
	$news[] = $arr;
}
?>
<pre>
<?php print_r($news); ?>
</pre>