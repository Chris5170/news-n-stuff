<section class="news_container">
	<?php
    foreach($articles as $article){
        $viewObj = new NewsView($article);
        $viewObj->buildTemplate('includes/templates/news.php');
    }
	?>
</section>