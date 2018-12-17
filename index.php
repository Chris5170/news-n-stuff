<?php
session_start();
define('rootPath', '');
if(isset($_GET['age'])){
	$_SESSION['userAge'] = $_GET['age'];
}
require_once('classes/controllers/controller.php');
$cont = new Controller();
if(isset($_GET['page'])){
	$page = $_GET['page'];
}
else{
	$page = "frontpage";
}
echo $cont->drawPage($page);
?>