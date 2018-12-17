<?php
require_once rootPath . 'classes/userparams.php';

class Director extends UserParams {
    private static $instance = FALSE, $age, $gender, $country, $templates, $assets, $structure, $recipients;

    private function __construct() {
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
            '#f00',
            '#008000',
            '#00f',
            '#ffa500',
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
                ),
                2 => array(
                    'file' => 'includes/templates/header_alt_2.php',
                    'style' => 'css/header_alt_2.php'
                )
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
                ),
                2 => array(
                    'file' => 'includes/templates/newslist_alt_2.php',
                    'style' => 'css/news_alt_2.php'
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
                ),
                2 => array(
                    'file' => 'includes/templates/footer_alt_2.php',
                    'style' => 'css/footer_alt_2.php'
                )

            ),
            'required' => true
        );
        $recipients = array(
            '.header_container *' => 0,
            '.header_container' => 1,
            '.nav' => 4,
            '.nav a : color' => 5,
            '.nav a : font' => 1,
            '.nav a:hover' => 2,
            '.body-front' => 0,
            '.news_container' => 0,
            '.news : background' => 2,
            '.news : color' => 5,
            '.news:hover' => 3,
            '.news p, .news h3, .news a' => 6,
            '.footer-container' => 1,
            '.header' => 14,
            '#main_nav ul li a' => 0,
            '#main_nav .active' => 7,
            '.search button' => 7,
            '#articles article' => 7,
            '#articles article a' => 7,
            '.footer' => 14,
            'fai' => 5,
            '#ungeNav' => 9,
            '#topNav : background' => 6,
            '#topNav : color' => 5,
            '#topNav a:visited' => 5,
            '#topNav a' => 5,
            'p, h1, a : alt_2' => 0,
            'a:visited : alt_2' => 6,
            '.catBox' => 5,
            '.navSlider a:nth-of-type(4n+1) .catBox' => 15,
            '.navSlider a:nth-of-type(4n+2) .catBox' => 16,
            '.navSlider a:nth-of-type(4n+3) .catBox' => 17,
            '.navSlider a:nth-of-type(4n+4) .catBox' => 18,
            '.ungeNewsSlider' => 9,
            '.newsTitleBox : background' => 19,
            '.newsTitleBox : color' => 5,
            'footer : alt_2' => 8,
            '.some li : font' => 1,
            '.some li : color' => 5,
            '.fa-facebook-square:hover' => 10,
            '.fa-instagram:hover' => 11,
            '.fa-linkedin:hover' => 12,
            '.fa-snapchat:hover' => 13
        );
        self::$recipients = $recipients;
        if(isset($_SESSION['userAge'])){
            self::$age = $_SESSION['userAge'];
        }
        else{
            self::$age = UserParams::USERAGE;
        }
        self::$gender = UserParams::USERGENDER;
        self::$country = UserParams::USERCOUNTRY;
        $tmp = array();
        foreach($structure as $section){
            if(self::$age < 25){
                if($section['required']){
                    $tmp[] = $section['templates'][2];
                }
            }
            else if(self::$age >= 25 && self::$age <= 50){
                $tmp[] = $section['templates'][0];
            }
            else{
                if($section['required']){
                    $tmp[] = $section['templates'][1];
                }
            }
        }
        self::$structure = $tmp;
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
        if(isset(self::$recipients[$recipient])){
            return self::$assets['colors'][self::$recipients[$recipient]];
        }
        else{
            $len = count(self::$assets['colors']);
            return self::$assets['colors'][rand(0, $len - 1)];
        }
    }
    public static function getFont($recipient = false){
        if (! self::$instance) {
            self::$instance = new Director();
        }
        if(isset(self::$recipients[$recipient])){
            return self::$assets['fonts'][self::$recipients[$recipient]];
        }
        else{
            $len = count(self::$assets['fonts']);
            return self::$assets['fonts'][rand(0, $len - 1)];
        }
    }
    public static function getStyle(){
        if (! self::$instance) {
            self::$instance = new Director();
        }
        foreach(self::$structure as $section){
            require_once(rootPath . $section['style']);
        }
        unset($_SESSION['activeTemplates']);
    }
    public static function getStructure(){
        if (! self::$instance) {
            self::$instance = new Director();
        }
        foreach(self::$structure as $section){
            require_once(rootPath . $section['file']);
        }
    }
}