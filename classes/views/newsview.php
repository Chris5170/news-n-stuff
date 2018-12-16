<?php
require_once rootPath . 'classes/views/View.php';

class NewsView extends View {
    private $str = "", $parts = array();
    public function __construct($model) {
    	parent::__construct($model);
    }
    public function addTitle(){
        if(isset($this->model->getParams()['title'])){
            $this->str .= "<h2>" . $this->model->getParams()['title'] . "</h2>";
        }
    }
    public function addExcerpt(){
        if(isset($this->model->getParams()['excerpt'])){
            $this->str .= "<p>" . $this->model->getParams()['excerpt'] . "</p>";
        }
    }
    public function addThumb(){
        if(isset($this->model->getParams()['thumb'])){
            $this->str .= "<img src='" . $this->model->getParams()['thumb'] . "' alt=''>";
        }
    }
    public function addLink(){
        if(isset($this->model->getParams()['link'])){
            $this->str .= "<a href='" . $this->model->getParams()['link'] . "'>Læs fulde historie</a>";
        }
    }
    public function addDate(){
        if(isset($this->model->getParams()['date'])){
            $this->str .= "<span>" . $this->model->getParams()['date'] . "</span>";
        }
    }
    public function build(){
        return $this->str;
    }
    public function buildStandard(){
        $this->str .= "<div>";
        $this->addThumb();
        $this->addTitle();
        $this->addDate();
        $this->addExcerpt();
        $this->addLink();
        $this->str .= "</div>";
        return $this->build();
    }
    public function buildTemplate($template){
        include($template);
    }
    public function buildList($template = false){
        if($template){
            buildTemplate($template);
        }
        else{
        $str = "";
            foreach($this->model->getArticles() as $article){
                $viewObj = new NewsView($article);
                $str .= $viewObj->buildStandard();
            }
            echo $str;
        }
    }
}