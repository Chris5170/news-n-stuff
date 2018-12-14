<?php
require_once 'classes/views/View.php';

class PageView extends View {
    private $content = "";
    public function __construct($model) {
    	parent::__construct($model);
    }
    public function build(){
        $str = "<!DOCTYPE html>";
        $str .= "<html><head>";
        $str .= "<title>";
        $str .= $this->model->getTitle();
        $str .= "</title>";
        $str .= "<link rel='stylesheet' type='text/css' href='css/style.php' />
";
        $str .= "</head><body>";
        $str .= $this->content;
        if($this->model->getScripts()){
            foreach($this->model->getScripts() as $script){
                $str .= $script;
            }
        }
        $str .= "</body></html>";
        return $str;
    }
    public function insert($str){
        $this->content .= $str;
    }
}