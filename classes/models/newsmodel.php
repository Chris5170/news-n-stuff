<?php 
require_once(rootPath . 'classes/models/model.php');
class NewsModel extends Model {
    private $articles, $params;
    public function __construct($data) {
        parent::__construct();
        if(is_string($data)){
            $xml = simplexml_load_file($data, 'SimpleXMLElement', LIBXML_NOCDATA);
            foreach ($xml->channel->item as $item) {
                $this->articles[] = new NewsModel($item);
            }
        }
        else{
            if(isset($data->title)){
                $this->params['title'] = (string)$data->title;
            }
            if(isset($data->description)){
                $this->params['excerpt'] = (string)$data->description;
            }
            if(isset($data->pictureLink)){
                $this->params['thumb'] = (string)$data->pictureLink;
            }
            if(isset($data->photographer)){
                $this->params['photographer'] = (string)$data->photographer;
            }
            if(isset($data->link)){
                $this->params['link'] = (string)$data->link;
            }
            if(isset($data->category)){
                $this->params['category'] = (string)$data->category;
            }
            if(isset($data->enclosure)){
                $this->params['thumb'] = preg_replace('/\/image_(.*?)\//', '/image_x_large/', (string)$data->enclosure->attributes()['url']);
            }
            if(isset($data->pubDate)){
                $this->params['date'] = (string)$data->pubDate;
            }
        }
    }
    // getters
    public function getArticles(){
        return $this->articles;
    }
    public function getTitle(){
        if(isset($this->params['title'])){
            return $this->params['title'];
        }
    }
    public function getExcerpt(){
        if(isset($this->params['excerpt'])){
            return $this->params['excerpt'];
        }
    }
    public function getThumb(){
        if(isset($this->params['thumb'])){
            return $this->params['thumb'];
        }
    }
    public function getLink(){
        if(isset($this->params['link'])){
            return $this->params['link'];
        }
    }
    public function getDate(){
        if(isset($this->params['date'])){
            return $this->params['date'];
        }
    }
    public function getParams(){
        return $this->params;
    }
    // setters
    public function setArticles($val){
        $this->articles = $val;
    }
    public function setTitle($val){
        $this->params['title'] = $val;
    }
    public function setExcerpt($val){
        $this->params['excerpt'] = $val;
    }
    public function setThumb($val){
        $this->params['thumb'] = $val;
    }
    public function setLink($val){
        $this->params['link'] = $val;
    }
    public function setDate($val){
        $this->params['date'] = $val;
    }
    public function setParams(){
        return $this->params;
    }
    // tools
    public function merge($obj){
        $this->articles = array_merge($this->articles, $obj->getArticles());
    }
    public function sort($order = "desc"){
        usort($this->articles, array($this, "cmp" . $order));
    }
    /* !! REMEMBER TO WRITE IT FOR DATE COMPARISON !! */
    private function cmpasc($a, $b){
        return strcmp($a->getDate(), $b->getDate());
    }
    private function cmpdesc($a, $b){
        return strcmp($b->getDate(), $a->getDate());
    }
    
}
?>