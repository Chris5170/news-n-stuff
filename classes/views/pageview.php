<?php
require_once 'classes/views/View.php';

class PageView extends View {
    private $content = "";
    public function __construct($model) {
    	parent::__construct($model);
    }
    public function start(){ ?>
        <!DOCTYPE html>
        <html>
            <head>
                <title><?php echo $this->model->getTitle(); ?></title>
                <?php
                foreach($this->model->getLinks() as $link){
                    $str = "";
                    foreach($link as $key => $attr){
                        $str .= " " . $key . "='" . $attr . "'";
                    } 
                    ?>
                        <link <?php echo $str; ?>>
                    <?php
                }
                ?>
            </head>
            <body>
                <?php
    }
    public function stop(){
                if($this->model->getScripts()){
                    foreach($this->model->getScripts() as $script){
                        echo $script;
                    }
                } 
                ?>
            </body>
        </html>
        <?php
    }
    public function insert($str){
        $this->content .= $str;
    }
}