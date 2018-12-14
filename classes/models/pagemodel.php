<?php 
require_once(rootPath . 'classes/models/model.php');
class PageModel extends Model {
    private $title, $links, $metas, $content, $scripts;
    public function __construct($title = "no title") {
        parent::__construct();
        $this->title = $title;
    }
    function getTitle(){
        return $this->title;
    }
    function getLinks(){
        return $this->links;
    }
    function getMetas(){
        return $this->metas;
    }
    function getContent(){
        return $this->content;
    }
    function getScripts(){
        return $this->scripts;
    }
    function setTitle($data){
        $this->title = $data;
    }
    function setLinks($data){
        $this->links = $data;
    }
    function setMetas($data){
        $this->metas = $data;
    }
    function setContent($data){
        $this->content = $data;
    }
    function setScripts($data){
        $this->scripts = $data;
    }

}
?>