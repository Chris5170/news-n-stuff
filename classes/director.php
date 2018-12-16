<?php
require_once rootPath . 'classes/userparams.php';

class Director extends UserParams {
    private static $instance = FALSE, $age, $gender, $country, $templates, $assets, $structure;

    private function __construct() {
        /*
        $assets = array();
        $assets[] = array(
            'templates' => array(
                array(
                    'name' => 'header'
                ),
                array(
                    'name' => 'header_alt_1'
                ),
                array(
                    'name' => 'header_alt_2'
                )
            ),
            'required' = true
        );
        */
        $assets['colors'] = array(
            'rgba(235, 235, 235, 1)',
            'rgba(76, 76, 76, 1)',
            'rgb(246, 176, 118)',
            'rgba(242, 216, 194, 1)',
            '#f2f2f2',
            '#fff',
            '#000'
        );
        $assets['fonts'] = array(
            '"Open sans"',
            '"Fredericka the Great"'
        );
        $assets['images'] = array(
            'https://meemiq.com/wp-content/uploads/2018/10/Bizmiq_Hvid-%C3%94%C3%87%C3%B4-transparent.png'
        );
        self::$assets = $assets;
        $structure[] = array(
            'templates' => array(
                0 => array(
                    'file' => 'includes/templates/header.php',
                    'style' => 'css/header.php'
                ),
                1 => array(
                    'file' => 'includes/templates/header_alt_1.php',
                    'style' => 'css/header_alt_1.php'
                )
            ),
            'required' => true
        );
        $structure[] = array(
            'templates' => array(
                0 => array(
                    'file' => 'includes/templates/newslist.php',
                    'style' => 'css/newslist.php'
                ),
                1 => array(
                    'file' => 'includes/templates/newslist_alt_1.php',
                    'style' => 'css/newslist_alt_1.php'
                )
            ),
            'required' => true
        );
        $structure[] = array(
            'templates' => array(
                0 => array(
                    'file' => 'includes/templates/footer.php',
                    'style' => 'css/footer.php'
                ),
                1 => array(
                    'file' => 'includes/templates/footer_alt_1.php',
                    'style' => 'css/footer_alt_1.php'
                )
            ),
            'required' => true
        );
        self::$structure = $structure;
        self::$age = UserParams::USERAGE;
        self::$gender = UserParams::USERGENDER;
        self::$country = UserParams::USERCOUNTRY;
        self::$templates['header'] = array('header');
        self::$templates['content'] = array('banner', 'news');
        self::$templates['footer'] = array('footer');
    }
    public static function getAge(){
        if (! self::$instance) {
            self::$instance = new Director();
        }
        return self::$age;
    }
    public static function getGender(){
        if (! self::$instance) {
            self::$instance = new Director();
        }
        return self::$gender;
    }
    public static function getCountry(){
        if (! self::$instance) {
            self::$instance = new Director();
        }
        return self::$country;
    }
    public static function getColor($recipient = false){
        if (! self::$instance) {
            self::$instance = new Director();
        }
        $len = count(self::$assets['colors']);
        return self::$assets['colors'][rand(0, $len - 1)];
    }
    public static function getFont($recipient = false){
        if (! self::$instance) {
            self::$instance = new Director();
        }
        $len = count(self::$assets['fonts']);
        return self::$assets['fonts'][rand(0, $len - 1)];
    }
    public static function getStyle(){
        if (! self::$instance) {
            self::$instance = new Director();
        }
        require_once(rootPath . self::$structure[0]['templates'][0]['style']);
    }
    public static function getStructure(){
        if (! self::$instance) {
            self::$instance = new Director();
        }
        foreach(self::$structure as $section){
            if($section['required']){
                require_once(rootPath . $section['templates'][0]['file']);
            }
            else{
                require_once(rootPath . $section['templates'][0]['file']);
            }
        }
    }
}