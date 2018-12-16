<?php
session_start();
define('rootPath', '../');
header("Content-type: text/css");
require_once('../classes/director.php');
Director::getStyle();
?>
