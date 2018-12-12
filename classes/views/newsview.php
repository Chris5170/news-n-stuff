<?php
require_once 'classes/views/View.php';

class NewsView extends View {
    private $str = "", $parts = array();
    public function __construct($model) {
    	parent::__construct($model);
    }
    public function addTitle(){
        $this->str .= "<h2>" . $this->model->getParams()['title'] . "</h2>";
    }
    public function addExcerpt(){
        $this->str .= "<p>" . $this->model->getParams()['excerpt'] . "</p>";
    }
    public function addThumb(){
        $this->str .= "<img src='" . $this->model->getParams()['thumb'] . "' alt=''>";
    }
    public function addLink(){
        $this->str .= "<a href='" . $this->model->getParams()['link'] . "'>Læs fulde historie</a>";
    }
    public function addDate(){
        $this->str .= "<span>" . $this->model->getParams()['date'] . "</span>";
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
}