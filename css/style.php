<?php
session_start();
header("Content-type: text/css");
echo "p{color: " . $_SESSION['style'] . ";}";
?>

