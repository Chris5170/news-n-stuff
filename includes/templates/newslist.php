<section class="news_container">
<?php
    require_once('classes/models/newsmodel.php');
    require_once('classes/views/newsview.php');

    $newsM =  new NewsModel('https://www.jv.dk/rss/nyheder');
    $newsMBT =  new NewsModel('https://www.berlingske.dk/content/rss');
    $newsM->merge($newsMBT);
    $newsM->sort();
    $articles = $newsM->getArticles();
    foreach($articles as $article){
        $viewObj = new NewsView($article);
        $viewObj->buildTemplate('includes/templates/news.php');
    }
	?>
</section>