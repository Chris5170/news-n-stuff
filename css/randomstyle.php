<?php
session_start();
define('rootPath', '../');
header("Content-type: text/css");
require_once('../classes/randomdirector.php');
?>
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: "Open Sans", sans-serif;
}
<?php
RandomDirector::getStyle();
?>
