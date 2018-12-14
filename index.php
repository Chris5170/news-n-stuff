<?php
session_start();
$_SESSION['style'] = "red";
define('rootPath', '');
require_once('classes/controllers/controller.php');
$cont = new Controller();
$cont->drawPage('frontpage');
/*
require_once('classes/models/newsmodel.php');
require_once('classes/views/newsview.php');
$newsM =  new NewsModel('https://www.jv.dk/rss/nyheder');
$newsMBT =  new NewsModel('https://www.berlingske.dk/content/rss');
$newsM->merge($newsMBT);
$newsM->sort();
$articles = $newsM->getArticles();
foreach($articles as $article){
	$viewObj = new NewsView($article);
	echo $viewObj->buildStandard();
}
echo "<pre>";
print_r($articles);
echo "</pre>";
*/
?>