<?php
define('rootPath', '');
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