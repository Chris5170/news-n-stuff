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
                $pageV = new PageView($pageM);
                $pageV->start();
                //echo Director::getColor();
                Director::getStructure();
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