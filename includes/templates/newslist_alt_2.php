<main id="primary ungePrimary">
    <section class="Headline ungeHeadline container wrap">
        <?php
        require_once('classes/models/newsmodel.php');
        require_once('classes/views/newsview.php');

        $newsM =  new NewsModel('https://www.jv.dk/rss/nyheder');
        $newsMBT =  new NewsModel('https://www.berlingske.dk/content/rss');
        $newsM->merge($newsMBT);
        $newsM->sort();
        $articles = $newsM->getArticles();
        $articCount = count($articles);
        for($i = 0;$i < 2;$i++){
            $viewObj = new NewsView($articles[$i]);
            $viewObj->buildTemplate('includes/templates/news_alt_2_1.php');
        }
        ?>
    </section>
    <section class="slider ungeNewsSlider">
        <div class="navBtn left">
            <a href="#"><i class="fas fa-angle-left"></i></a>
        </div>
        <div class="newsThumbnail">
        <?php
        for($i;$i < 11;$i++){
            $viewObj = new NewsView($articles[$i]);
            $viewObj->buildTemplate('includes/templates/news_alt_2_2.php');
        }
        ?>
        </div>
        <div class="navBtn right">
            <a href="#"><i class="fas fa-angle-right"></i></a>
        </div>
    </section>
    <section class="articleEnv wrap">
        <?php
        for($i;$i < $articCount;$i++){
            $viewObj = new NewsView($articles[$i]);
            $viewObj->buildTemplate('includes/templates/news_alt_2_3.php');
        }
        ?>
    </section>
</main>