<?php
session_start();
$_SESSION['style'] = "red";
define('rootPath', '');
require_once('classes/controllers/controller.php');
$cont = new Controller();
$cont->drawPage('frontpage');
?>