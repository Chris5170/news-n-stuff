<?php
class Controller {
    private $model;
    public function __construct() {

    }
    public function drawPage($page){
        //print_r($_SESSION);
        switch ($page){
            case 'frontpage':
                require_once('classes/director.php');
                require_once('classes/models/pagemodel.php');
                require_once('classes/views/pageview.php');
                $pageM = new PageModel('Forside');
                $links = array(
                            array(
                                'href' => rootPath . 'css/style.php',
                                'rel' => 'stylesheet',
                                'type' => 'text/css'
                            ),
                            array(
                                'href' => 'https://fonts.googleapis.com/css?family=Fredericka+the+Great|Open+Sans',
                                'rel' => 'stylesheet'
                            ),
                            array(
                                'rel' => 'stylesheet', 'href' => 'https://use.fontawesome.com/releases/v5.5.0/css/all.css', 'integrity' => 'sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU', 'crossorigin' => 'anonymous'
                            )
                );
                $pageM->setLinks($links);
                $pageV = new PageView($pageM);
                $pageV->start();
                //echo Director::getColor();
                Director::getStructure();
                // include('includes/templates/header.php');
                // include('includes/templates/newslist.php');
                // include('includes/templates/footer.php');
                $pageV->stop();
                break;

                case 'random':
                    require_once('classes/randomdirector.php');
                    require_once('classes/models/pagemodel.php');
                    require_once('classes/views/pageview.php');
                    $pageM = new PageModel('Forside');
                    $links = array(
                                array(
                                    'href' => rootPath . 'css/randomstyle.php',
                                    'rel' => 'stylesheet',
                                    'type' => 'text/css'
                                ),
                                array(
                                    'href' => 'https://fonts.googleapis.com/css?family=Fredericka+the+Great|Open+Sans',
                                    'rel' => 'stylesheet'
                                ),
                                array(
                                    'rel' => 'stylesheet', 'href' => 'https://use.fontawesome.com/releases/v5.5.0/css/all.css', 'integrity' => 'sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU', 'crossorigin' => 'anonymous'
                                )
                    );
                    $pageM->setLinks($links);
                    $pageV = new PageView($pageM);
                    $pageV->start();
                    //echo Director::getColor();
                    RandomDirector::getStructure();
                    // include('includes/templates/header.php');
                    // include('includes/templates/newslist.php');
                    // include('includes/templates/footer.php');
                    $pageV->stop();
                    break;
            
            default:
                return "page not found";
                break;
        }
    }
}