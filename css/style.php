<?php
session_start();
define('rootPath', '../');
header("Content-type: text/css");
require_once('../classes/director.php');
?>
*{
	margin: 0;
	padding: 0;
}
<?php
Director::getStyle();
?>
