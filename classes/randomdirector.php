<?php
session_start();
require_once rootPath . 'classes/userparams.php';

class Director extends UserParams {
    private static $instance = FALSE, $age, $gender, $country, $templates, $assets, $structure, $activeTemplates;

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
            '#EBEBEB',
            '#4C4C4C',
            '#F6B076',
            '#F2D8C2',
            '#f2f2f2',
            '#fff',
            '#000',
            '#8e2a2a',
            '#3e3e3e',
            '#bbb',
            '#3b5998',
            '#e1306c',
            '#0077b5',
            '#fffc00',
            '#f4f4f4',
            'rgba(0,0,0,0.4)'
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
                )/*,
                2 => array(
                    'file' => 'includes/templates/header_alt_2.php',
                    'style' => 'css/header_alt_2.php'
                )*/
            ),
            'required' => true
        );
        $structure[] = array(
            'templates' => array(
                0 => array(
                    'file' => 'includes/templates/banner.php',
                    'style' => 'css/banner.php'
                )
            ),
            'required' => false
        );
        $structure[] = array(
            'templates' => array(
                0 => array(
                    'file' => 'includes/templates/newslist.php',
                    'style' => 'css/news.php'
                ),
                1 => array(
                    'file' => 'includes/templates/newslist_alt_1.php',
                    'style' => 'css/news_alt_1.php'
                )/*,
                2 => array(
                    'file' => 'includes/templates/newslist_alt_2.php',
                    'style' => 'css/news_alt_2.php'
                )*/
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
                )/*,
                2 => array(
                    'file' => 'includes/templates/footer_alt_2.php',
                    'style' => 'css/footer_alt_2.php'
                )*/

            ),
            'required' => true
        );
        if(!isset($_SESSION['activeTemplates'])){
            $activeTemplates = array();
            foreach($structure as $section){
                $len = count($section['templates']);
                $random = rand(0, $len - 1) * 1;
                $activeTemplates[] = $random;
            }
            $_SESSION['activeTemplates'] = $activeTemplates;
        }
        //$activeTemplates = array(1,0,0,1);
        self::$activeTemplates = $_SESSION['activeTemplates'];
        self::$structure = $structure;
        self::$age = UserParams::USERAGE;
        self::$gender = UserParams::USERGENDER;
        self::$country = UserParams::USERCOUNTRY;
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
        $iterator = 0;
        foreach(self::$structure as $section){
            if($section['required']){
                require_once(rootPath . $section['templates'][self::$activeTemplates[$iterator]]['style']);
                $iterator++;
            }
            else{
                require_once(rootPath . $section['templates'][self::$activeTemplates[$iterator]]['style']);
                $iterator++;
            }
        }
        unset($_SESSION['activeTemplates']);
    }
    public static function getStructure(){
        if (! self::$instance) {
            self::$instance = new Director();
        }
        $iterator = 0;
        foreach(self::$structure as $section){
            if($section['required']){
                require_once(rootPath . $section['templates'][self::$activeTemplates[$iterator]]['file']);
                $iterator++;
            }
            else{
                require_once(rootPath . $section['templates'][self::$activeTemplates[$iterator]]['file']);
                $iterator++;
            }
        }
    }
}