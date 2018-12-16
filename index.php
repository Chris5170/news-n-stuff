<?php
define('rootPath', '');
require_once('classes/controllers/controller.php');
$cont = new Controller();
echo $cont->drawPage('frontpage');
?>