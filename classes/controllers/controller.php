<?php
class Controller {
    private $model;
    public function __construct() {

    }
    public function drawPage($page){
        //print_r($_SESSION);
        switch ($page){
            case 'frontpage':
                require_once('classes/models/pagemodel.php');
                require_once('classes/views/pageview.php');
                require_once('classes/models/newsmodel.php');
                require_once('classes/views/newsview.php');
                $pageM = new PageModel('Forside');
                $pageV = new PageView($pageM);
                $newsM =  new NewsModel('https://www.jv.dk/rss/nyheder');
                $newsMBT =  new NewsModel('https://www.berlingske.dk/content/rss');
                $newsM->merge($newsMBT);
                $newsM->sort();
                $articles = $newsM->getArticles();
                $str = "";
                foreach($articles as $article){
                    $viewObj = new NewsView($article);
                    $str .= $viewObj->buildStandard();
                }
                $pageV->insert($str);
                echo $pageV->build();
                break;
            
            default:
                return "page not found";
                break;
        }
    }
}