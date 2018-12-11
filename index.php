<?php

session_start();
define('rootPath', '');


require_once('classes/models/newsmodel.php');
$newsM =  new NewsModel('https://www.jv.dk/rss/nyheder');
$newsMBT =  new NewsModel('https://www.berlingske.dk/content/rss');
$newsM->merge($newsMBT);
$newsM->sort();
$articles = $newsM->getArticles();
echo "<pre>";
print_r($articles);
echo "</pre>";
?>